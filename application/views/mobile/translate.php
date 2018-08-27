      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Version 2.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- select -->
          <div class="form-group col-xs-2">
              <!-- <label>Country</label> -->
              <select class="form-control" id="country_select">
                <option value="">Select</option>
                <?php foreach ($country_data as $row){
                ?>
                <option value="<?php echo $row['country_code']; ?>"><?php echo $row['country_name']; ?></option>
                <?php
                }
                ?>
              </select>
          </div><!-- /.select -->
          <button type="button" class="btn bg-black btn-flat" onclick="GetXML('ios')">IOS config</button>
          <button type="button" class="btn bg-black btn-flat" onclick="GetXML('android')">Android config</button>
          <!-- table -->
          <table id="lang_edit" class="display" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>English Sample</th>
                <th>Language edit</th>
                <th>Operation</th>
                <th>Create time</th>
                <th>Modify time</th>
              </tr>
            </thead>
            <tbody>
              <!-- Datatable.js libray -->
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>English Sample</th>
                <th>Language Edit</th>
                <th>Operation</th>
                <th>Create time</th>
                <th>Modify time</th>
              </tr>
            </tfoot>
          </table><!-- /.table -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <script>
    var remarkShowLength = 40;

    $(document).ready(function() {
      init();
    });

    function init(){
      table = $('#lang_edit').DataTable();

      $("#country_select").on('change', function(){
        var country_code = $("#country_select").find(":selected").val();
        var userEntity = {
            country: country_code
      };
      sessionStorage.setItem('user', JSON.stringify(userEntity));

      getData()
      });
    }

    function getData(){
      var userJsonStr = sessionStorage.getItem('user');
      userEntity = JSON.parse(userJsonStr);
      var country_code = userEntity.country;

      if (country_code == null || country_code == undefined || country_code == '') { 
        $('#lang_edit').dataTable().fnClearTable(); 
        return;
      } 

      //reset datatable
      if ($.fn.dataTable.isDataTable('#lang_edit'))
      {
        _table = $('#lang_edit').DataTable();
        _table.destroy();
      }
    
      let table = $('#lang_edit').DataTable( {
        "ajax": {
          "url": "<?php echo base_url() ?>/console/conuntry_change",
          "type": "GET",
          "dataType": "json",
          "contentType": "application/json;charset=utf-8",
          "processData": true,
          "data": function (d) {
            return $.extend({}, d, {
              "s_country_code": country_code
            });
          }
        },
        "rowId": function(d) {
          return 'Keyid_' + d.key_id;
        },
        "columns": [
        { "data": "key_id" },
        { "data": "key_en_sample" },
        { "data": "translation_translate" },
        { "data": "key_id" },
        { "data": "translation_create" },
        { "data": "translation_modify" }
        ],
        "columnDefs": [
            {
              "targets": [1],
              "data": "key_en_sample", 
              "render": function(data, type, full) {
                  if (full.key_en_sample.length > remarkShowLength) {
                    return getPartialRemarksHtml(full.key_en_sample);
                  }else{
                    return full.key_en_sample;
                  }
              }
            },
            {
              "targets": [2],
              "data": "translation_translate", 
              "render": function(data, type, full) {
                  return "<div class=\"col-xs-10\"><input type=\"text\" class=\"form-control\" id=\"trans_lang_value"+ full.key_id +"\" value=" + data + "></div>";
              }
            },
            {
              "targets": [3],
              "data": "key_id", 
              "render": function(data, type, full) {
                  return "<button type=\"button\" class=\"btn bg-navy btn-flat\" onclick=\"edit_trans_value("+ data +")\">Save</button>";
              }
            }
        ],
        "createdRow": function( row, data, dataIndex ) {
          if(data.key_en_sample.length > remarkShowLength){
              $(row).children('td').eq(1).attr('onclick','javascript:changeShowRemarks(this);');
          }
          $(row).children('td').eq(1).attr('content',data.key_en_sample);
        }
      });
    }

    function changeShowRemarks(obj){
      var content = $(obj).attr("content");
      if(content != null && content != ''){
          if($(obj).attr("isDetail") == 'true'){
            $(obj).attr('isDetail',false);
            $(obj).html(getPartialRemarksHtml(content));
          }else{
            $(obj).attr('isDetail',true);
            $(obj).html(getTotalRemarksHtml(content));
          }
      }
    }

    function getPartialRemarksHtml(remarks){
      return remarks.substr(0,remarkShowLength) + '&nbsp;&nbsp;<a href="javascript:void(0);" ><b>...</b></a>';
    }

    function getTotalRemarksHtml(remarks){
      return remarks + '&nbsp;&nbsp;<a href="javascript:void(0);" >back</a>';
    }

    function GetXML(app) {
      var userJsonStr = sessionStorage.getItem('user');
      userEntity = JSON.parse(userJsonStr);
      var country_code = userEntity.country;

      if(app == 'android'){
        if(country_code == null || country_code == undefined || country_code == ''){
          return false;
        }
        window.open("<?php echo base_url() ?>/console/layout_android_config?country_code="+country_code+"","_self");
      }else if(app == 'ios'){
        if(country_code == null || country_code == undefined || country_code == ''){
          return false;
        }
        window.open("<?php echo base_url() ?>/console/layout_ios_config?country_code="+country_code+"","_self");
      }else{
        return false;
      }
    }

    function edit_trans_value(id){
      var userJsonStr = sessionStorage.getItem('user');
      userEntity = JSON.parse(userJsonStr);
      var country_code = userEntity.country;

      if (country_code == null || country_code == undefined || country_code == '') { 
        return;
      }

      var trans_lang_value = $('#trans_lang_value'+id+'').val();
      
      $.ajax({
            url:"<?php echo base_url() ?>/console/edit_trans_value", 			//the page containing php script
            type: "POST", 				//request type
            dataType : "json",
            data:{s_trans_id: id, s_trans_lang_value: trans_lang_value, s_country_code: country_code},
              success : function(data) {
                if(typeof(data['translation_create']) == "undefined"){
                  $('#Keyid_'+id).find('td:eq(5)').html(data['translation_modify']);
                }else{
                  $('#Keyid_'+id).find('td:eq(4)').html(data['translation_create']);
                  $('#Keyid_'+id).find('td:eq(5)').html(data['translation_modify']);
                }

                alert("success");
              },
              error : function(data) {
                alert("fail");
              }
      });
    }
    </script>

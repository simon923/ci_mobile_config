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
            <!-- Config Increase -->
            <button type="button" class="btn bg-black btn-flat margin" data-toggle="modal" data-target="#modal-increase">INCREASE</button>
            <div class="modal fade" id="modal-increase">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Config Increase</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <label for="exampleInputPassword1">*English Sample</label>
                    <input type="text" class="form-control" id="insert_en_sample">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">IOS Key</label>
                    <input type="text" class="form-control" id="insert_ios_key">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Android Key</label>
                    <input type="text" class="form-control" id="insert_android_key">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn bg-navy" onclick="config_insert(this)">Save changes</button>
                </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- /.Config Increase -->
          <!-- table -->
          <table id="key_edit" class="display" style="width:100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>English Sample</th>
                <th>IOS Key</th>
                <th>Android Key</th>
                <th>Config Edit</th>
                <th>Create time</th>
                <th>Modify time</th>
                <!-- <th>Creator</th> -->
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($data as $row){
              ?>
              <tr>
                  <td><?php echo $row['key_id'] ?></td>
                  <td><?php echo $row['key_en_sample'] ?></td>
                  <td><?php echo $row['key_ios_key'] ?></td>
                  <td><?php echo $row['key_android_key'] ?></td>
                  <td>
                    <button type="button" class="btn bg-navy" onclick="modal_edit(this)"  value="<?php echo $row['key_id'] ?>" data-toggle="modal" data-target="#modal-default">Edit</button>
                    <button type="button" class="btn bg-maroon" onclick="modal_delete(this)"  value="<?php echo $row['key_id'] ?>">Delete</button>
                  </td>
                  <td><?php echo $row['key_create'] ?></td>
                  <td><?php echo $row['key_modify'] ?></td>
                  <!-- <td>simon</td> -->
              </tr>
              <?php 
                }; 
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>English Sample</th>
                <th>IOS Key</th>
                <th>Android Key</th>
                <th>Config Edit</th>
                <th>Create time</th>
                <th>Modify time</th>
                <!-- <th>Creator</th> -->
              </tr>
            </tfoot>
          </table><!-- /.table -->
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Config Edit</h4>
                <h3 for="exampleInputPassword1" id="trans_id">ID:2</h3>
              </div>
              <div class="modal-body">
                <div class="form-group">
                <label for="exampleInputPassword1">English Sample</label>
                <input type="text" class="form-control" id="trans_en_sample">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">IOS Key</label>
                <input type="text" class="form-control" id="translate_ios">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Android Key</label>
                <input type="text" class="form-control" id="translate_android">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-navy" onclick="config_edit(this)">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script>
          $(document).ready(function() {
          $('#key_edit').DataTable();
          });

          function modal_edit(trans_id) {
              $.ajax({
                url:"<?php echo base_url() ?>/console/transbox", 			//the page containing php script
                type: "POST", 				//request type
                  dataType : "json",
                data:{trans_id: trans_id.value},
                  success : function(data) {
                      $('#trans_id').html('ID:'+data[0].key_id);
                      $('#trans_en_sample').val(data[0].key_en_sample);
                      $('#translate_ios').val(data[0].key_ios_key);
                      $('#translate_android').val(data[0].key_android_key);
                  },
                  error : function(data) {
                      // do something
                      alert('error');
                  }
              });
          };

          function config_edit(){
            var trans_id = $('#trans_id').html().replace(/[^0-9]/ig,"");
            var trans_en_sample = $('#trans_en_sample').val();
            var translate_ios = $('#translate_ios').val();
            var translate_android = $('#translate_android').val();

              $.ajax({
                url:"<?php echo base_url() ?>/console/update_app", 			//the page containing php script
                type: "POST", 				//request type
                dataType : "json",
                data:{s_trans_id: trans_id, s_trans_en_sample: trans_en_sample, s_translate_ios: translate_ios, s_translate_android: translate_android},
                  success : function(data) {
                    alert('success');
                    location.reload() 
                  },
                  error : function(data) {
                    alert('error');
                  }
              });
          
          };

          function config_insert(){
            var trans_en_sample = $('#insert_en_sample').val();
            var translate_ios = $('#insert_ios_key').val();
            var translate_android = $('#insert_android_key').val();

            if (trans_en_sample == null || trans_en_sample == undefined || trans_en_sample == ''){
              alert('Required field cannot be blank')
              return false;
            }
            $.ajax({
              url:"<?php echo base_url() ?>/console/insert_app", 			//the page containing php script
              type: "POST", 				//request type
              dataType : "json",
              data:{s_trans_en_sample: trans_en_sample, s_translate_ios: translate_ios, s_translate_android: translate_android},
                success : function(data) {
                  alert('success');
                  location.reload() 
                },
                error : function(data) {
                  alert('error');
                }
            });
          
          };

          function modal_delete(trans_id){
            $.ajax({
              url:"<?php echo base_url() ?>/console/delete_app", 			//the page containing php script
              type: "POST", 				//request type
              dataType : "json",
              data:{s_trans_id: trans_id.value},
                success : function(data) {
                  alert('success');
                  location.reload() 
                },
                error : function(data) {
                  alert('error');
                }
            });
          
          };
      </script>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?=base_url();?>plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url();?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?=base_url();?>dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- dataTables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-black sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="dashboard.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><img src="<?php echo base_url();?>images/msi-gaming_series-logo-cutout-new.png" width="35px"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="<?php echo base_url();?>images/msi-gaming_series-logo-cutout-new.png" width="35px"><img src="<?php echo base_url();?>images/logo.png" width="100px"></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-danger">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url();?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url();?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url();?>dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="<?php echo base_url();?>dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-danger">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..." />
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Mobile config</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/console/keyvalue"><i class="fa fa-circle-o"></i> Key insert</a></li>
                <li><a href="/console/translation"><i class="fa fa-circle-o"></i> Config translation</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

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

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright © 2015 <a href="http://www.msi.com">Micro-Star Int'l Co.,Ltd</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">

          </div><!-- /.tab-pane -->

          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- dataTables 1.10.19 -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script>
    var remarkShowLength = 40;

    $(document).ready(function() {
      init();
    });

    function init(){
      $('#lang_edit').DataTable();

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
    
      table = $('#lang_edit').DataTable( {
        "ajax": {
          "url": "/console/conuntry_change",
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
        window.open("/console/layout_android_config?country_code="+country_code+"","_self");
      }else if(app == 'ios'){
        if(country_code == null || country_code == undefined || country_code == ''){
          return false;
        }
        window.open("/console/layout_ios_config?country_code="+country_code+"","_self");
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
            url:"/console/edit_trans_value", 			//the page containing php script
            type: "POST", 				//request type
            dataType : "json",
            data:{s_trans_id: id, s_trans_lang_value: trans_lang_value, s_country_code: country_code},
              success : function(data) {
                alert("success");
              },
              error : function(data) {
                alert("fail");
              }
      });
    }
    </script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="dist/js/demo.js" type="text/javascript"></script> -->
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MangoTech | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin/js/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('public/admin/js/dist/css/skins/_all-skins.min.css') }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/morris.js/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/jvectormap/jquery-jvectormap.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('public/admin/bootstrap/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      @include('admin.includes.header')

      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ url('public/admin/js/dist/img/avatar2.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Sumina Maharjan</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
              <li class="header">MAIN NAVIGATION</li>
              <li class="active treeview">
                <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
              </li>

              {{-- <li class="treeview">
                <a href="#">
                  <i class="fa fa-gear"></i> <span>Setting</span>
                </a>
              </li> --}}

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-address-book"></i> <span>Service</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createservice')}}"><i class="fa fa-circle"></i>Add Service</a>
                  </li>
                  <li><a href="{{ url('/viewservice')}}"><i class="fa fa-circle"></i>View Service</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-briefcase"></i> <span>Portfolio</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createportfolio')}}"><i class="fa fa-circle"></i> Add Portfolio</a></li>
                  <li><a href="{{url('/viewportfolio')}}"><i class="fa fa-circle"></i> View Porfolio</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-comment"></i> <span>Feedback</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/viewcontact') }}"><i class="fa fa-circle"></i>View Feedback</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-book"></i> <span>Article</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createarticle')}}"><i class="fa fa-circle"></i> Add Article</a></li>
                  <li><a href="{{ url('/viewarticle') }}"><i class="fa fa-circle"></i>View Article</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-bell"></i> <span>Notice</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createnotice')}}"><i class="fa fa-circle"></i> Add Notice</a></li>
                  <li><a href="{{ url('/viewnotice') }}"><i class="fa fa-circle"></i>View Notice</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap"></i> <span>Career</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createcareer')}}"><i class="fa fa-circle"></i> Add Career</a></li>
                  <li><a href="{{ url('/viewcareer') }}"><i class="fa fa-circle"></i>View Career</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-file"></i> <span>Testimonal</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createtestimonal')}}"><i class="fa fa-circle"></i> Add Testimonal</a></li>
                  <li><a href="{{ url('/viewtestimonal') }}"><i class="fa fa-circle"></i>View Testimonal</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-smile-o"></i> <span>Happy Client</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createhappyclient')}}"><i class="fa fa-circle"></i> Add Happy Client</a></li>
                  <li><a href="{{ url('/viewhappyclient') }}"><i class="fa fa-circle"></i>View Happy Client</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap"></i> <span>Team</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createteam')}}"><i class="fa fa-circle"></i> Add Team</a></li>
                  <li><a href="{{ url('/viewteam') }}"><i class="fa fa-circle"></i>View Team</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-edit"></i> <span>Apply Form</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/viewapplycareer') }}"><i class="fa fa-circle"></i>Apply Form</a></li>
                </ul>
              </li>

              <li class="treeview">
                <a href="#">
                  <i class="fa fa-image"></i> <span>Slider</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{ url('/createslider')}}"><i class="fa fa-circle"></i> Add Slider</a></li>
                  <li><a href="{{ url('/viewslider') }}"><i class="fa fa-circle"></i>View Slider</a></li>
                </ul>
              </li>

            </ul>
        </section>
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Dashboard
          <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>

             @yield('content')


        </section>
        </div>
      </div>

   

    {{-- @include('admin.includes.footer') --}}

    <!-- jQuery 3 -->
    <script src="{{ url('public/admin/js/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('public/admin/js/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url('public/admin/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Morris.js charts -->
    <script src="{{ url('public/admin/js/raphael/raphael.min.js') }}"></script>
    <script src="{{ url('public/admin/js/morris.js/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('public/admin/js/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ url('public/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ url('public/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('public/admin/js/jquery-knob/dist/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('public/admin/js/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('public/admin/js/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ url('public/admin/js/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ url('public/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- Slimscroll -->
    <script src="{{ url('public/admin/js/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('public/admin/js/fastclick/lib/fastclick.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public/admin/js/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('public/admin/js/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ url('public/admin/js/dist/js/demo.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ url('public/admin/js/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/admin/js/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <!-- CK Editor -->
    <script src="{{ url('public/ckeditor/ckeditor.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<script>
    $('.select2').select2();
</script>
  </body>
</html>
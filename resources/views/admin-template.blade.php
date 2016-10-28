<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style("css/bootstrap.min.css") !!}
  <!-- Font Awesome -->
  {!! Html::style("css/font-awesome.min.css") !!}
  <!-- Font Bootstrap -->
  {!! Html::style("css/font-awesome.min.css") !!}
   {!! Html::style("css/font-awesome.min.css") !!}
  <!-- Ionicons -->
  {!! Html::style("css/ionicons.min.css") !!}
  <!-- jvectormap -->
  {!! Html::style("plugins/jvectormap/jquery-jvectormap-1.2.2.css") !!}
  <!-- Theme style -->
  {!! Html::style("css/AdminLTE.min.css") !!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
   {!! Html::style("css/skins/skin-red-light.css") !!}

   <!-- Datatables Bootstrap style -->
  {!! Html::style("plugins/datatables/dataTables.bootstrap.css") !!}
  <!-- Theme style -->
  {!! Html::style("css/custom.admin.css") !!}

   <!-- Summernote style -->
  {!! Html::style("css/summernote.css") !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Header -->
  @include('partials.admin-header')

  <!-- Left side column. contains the logo and sidebar -->
  @include('partials.admin-side-column')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('content-title')
        <small>@yield('small-content-title')</small>
      </h1>
      <ol class="breadcrumb">
        @yield('content-fil-dariane')
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('main-content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
{!! Html::script("plugins/jQuery/jquery-2.2.3.min.js") !!}
<!-- Bootstrap 3.3.6 -->
{!! Html::script("js/bootstrap.min.js") !!}
<!-- FastClick -->
{!! Html::script("plugins/fastclick/fastclick.js") !!}
<!-- AdminLTE App -->
{!! Html::script("js/app.min.js") !!}
<!-- Sparkline -->
{!! Html::script("plugins/sparkline/jquery.sparkline.min.js") !!}
<!-- jvectormap -->
{!! Html::script("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") !!}
{!! Html::script("plugins/jvectormap/jquery-jvectormap-world-mill-en.js") !!}
<!-- DataTables -->
{!! Html::script("plugins/datatables/jquery.dataTables.min.js") !!}
{!! Html::script("plugins/datatables/dataTables.bootstrap.min.js") !!}
<!-- SlimScroll 1.3.0 -->
{!! Html::script("plugins/slimScroll/jquery.slimscroll.min.js") !!}
<!-- ChartJS 1.0.1 -->
{!! Html::script("plugins/chartjs/Chart.min.js") !!}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{!! Html::script("js/pages/dashboard2.js") !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script("js/demo.js") !!}

<!-- Summernote JS -->
{!! Html::script("js/summernote.min.js") !!}
{!! Html::script("summernote/lang/summernote-fr-FR.js") !!}

<!-- Summernote Uploadcare Plugin JS -->
{!! Html::script("summernote/plugin/uploadcare/uploadcare.js") !!}

<div>
  @yield('include')
</div>
<!-- Script Section -->
<script type="text/javascript">
    @yield('script')
</script>


</body>
</html>

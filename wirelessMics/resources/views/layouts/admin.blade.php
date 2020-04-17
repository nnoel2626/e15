<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel | Wireless Mics Inventory</title>

  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
  <!-- Ionicons -->
  {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="../../dist/css/adminlte.min.css"> --}}
  <!-- Google Font: Source Sans Pro -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
   <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" /> --}}
     <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


@yield('head')

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Inventory</b>Management</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">RESOURCES</li>
        <!-- Optionally, you can add icons to the links -->
        {{-- <li><a href="#"><i class="fa fa-file"></i> <span></span></a></li> --}}

        @can('manage-users')


        <li class="{{Request::path()=== '/users' ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i>Users</a>
        </li>
         <li class="{{Request::path()=== '/users' ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('admin.roles.index') }}"><i class="fa fa-users"></i>Roles</a>
        </li>
         <li class="{{Request::path()=== '/tags' ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('admin.tags.index') }}"><i class="fa fa-users"></i>Tags</a>
        </li>
        <li class="{{Request::path()=== '/locations' ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('admin.locations.index') }}"><i class="fa fa-users"></i>Locations</a>
         <li class="{{Request::path()=== '/list' ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('admin.mics.list') }}"><i class="fa fa-users"></i>Microphones</a>
        </li>

        @endcan

        @can('manage-users')
        <li class="header">ACCOUNT</li>
        {{-- <li><a href="#"><i class="fa fa-users"></i> <span></span></a></li> --}}
        <li class="{{Request::is('/admin/users/profile ') ? 'current_page_item': ''}}">
            <a class="nav-link" href="{{ route('admin.users.profile') }}"><i class="fa fa-users"></i> <span>Profile</span></a>
        </li>

         <li class="{{Request::is('home') ? 'current_page_item': ''}}">
        <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-power-off text-red"></i> Home</a>
        </li>
        @endcan
        <li class="">
           <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
             <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">

    </div>
    <!-- Default to the left -->
    Harvard Wireless Microphones.
    <strong>Copyright &copy; 2020 </strong> All rights reserved.
  </footer>
</div>

{{-- <script src="{{asset('js/app.js')}}"></script> --}}
</body>

<script>
     $('#deleteLocation').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var rlocation_id = button.data('locationid')
      var modal = $(this)
      modal.find('.modal-body #location_id').val(location_id);
})


   $('#deleteRole').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var role_id = button.data('roleid')
      var modal = $(this)
      modal.find('.modal-body #role_id').val(role_id);
})



$('#deleteUser').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var user_id = button.data('userid')
      var modal = $(this)
      modal.find('.modal-body #user_id').val(user_id);
})


$('#deleteTag').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var tag_id = button.data('tagid')
      var modal = $(this)
      modal.find('.modal-body #tag_id').val(tag_id);
})


$('#deleteMic').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var microphone_id = button.data('microphoneid')
      var modal = $(this)
      modal.find('.modal-body #microphone_id').val(microphone_id);
})
</script>

</html>

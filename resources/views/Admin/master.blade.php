<!DOCTYPE html>
<html>
{{--css--}}
@include('Admin.Layouts.css')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
{{--start--}}

    @include('Admin.Layouts.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('Admin.Layouts.leftmenu')
    {{--sidebar--}}

    <!-- Content Wrapper. Contains page content -->
     @yield('content')
    {{--maincontent--}}
    <!-- /.content-wrapper -->

   {{--footer--}}

    <!-- Control Sidebar -->
    @include('Admin.Layouts.sidebarRight')
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    {{--@include('Admin.Layouts.footer')--}}
    <div class="control-sidebar-bg"></div>
    @include('Admin.Layouts.footer')
</div>
<!-- ./wrapper -->
{{--END--}}
<!-- jQuery 3 -->
@include('Admin.Layouts.js')
{{--jsfile--}}

@yield('page-js-script')
</body>
</html>

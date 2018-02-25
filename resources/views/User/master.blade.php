<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    @include('User.Layouts.css')



</head>
<body>

<!-- ====================================================
header section -->
@include('User.Layouts.header')
 <!-- end of header area -->

<!-- end of slider section -->
@yield('content')


<!-- footer starts here -->

@include('User.Layouts.footer')
<!-- script tags
============================================================= -->
@include('User.Layouts.js')
</body>
</html>
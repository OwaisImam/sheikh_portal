<!doctype html>
<html lang="en">
<head>
   @include('layout.head')
    <title>@yield('title')</title>
</head>
<body class="sidebar-fixed topnav-fixed dashboard">
<!-- WRAPPER -->
<div id="wrapper" class="wrapper">
@include('layout.header')
    @include('layout.leftsidebar')
    @yield('content')
    @include('layout.switcher')
</div>
@include('layout.footerscript')
</body>
</html>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
@include('admin._masters.header')
    @yield('header')
</head>

<body >
<!--Navigation Top Bar Start-->
@include('admin._masters.nav')
 
<!--Navigation Top Bar End-->
<section id="main-container">

    <!--Left navigation section start-->
    @include('admin._masters.left-navigation')
    <!--Left navigation section end-->

@yield('content')



@include('admin._masters.footer')
@yield('footer')

</body>
</html>
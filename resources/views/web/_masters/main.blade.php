<! DOCTYPE html>
<html>
{{--
{{asset('resources/assets/web/ --}}
<head>
    @include('web._masters.header')
</head>
<body>

<!-- navbar -->
@include('web._masters.nav')


@yield('content')


@include('web._masters.footer')

</body>
</html>
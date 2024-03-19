<!DOCTYPE html>
<html lang="zxx">

@include('site.components.head-default')

<body>

    @include('site.components.header')

    @yield('content')

    @include('site.components.footer')

    <!-- Global Vendor, plugins JS -->

    @include('site.includes.scripts-default')

</body>

</html>

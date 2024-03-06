<!DOCTYPE html>
<html lang="zxx">

@include('site.components.head-default')

<body>

    <div class="main-wrapper">

        @include('site.components.header')

        @yield('content')

        @include('site.components.footer')

    </div>

    <!-- Global Vendor, plugins JS -->

    @include('site.includes.scripts-default')

</body>

</html>

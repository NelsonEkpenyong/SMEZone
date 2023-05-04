<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.community.head')
<body>
     <!-- Nav -->
     @include('layouts.community.header')
     <!-- End of Nav -->
        @include('layouts.community.aside')
        @yield('content')

     <!-- N3zt[Cf1(2zS2KFooter -->
     {{-- @include('layouts.footer') --}}
     <!-- End of Footer -->

     <!-- Js -->
     <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
     crossorigin="anonymous"
   ></script>
  <!-- End of Js -->
</body>
</html>

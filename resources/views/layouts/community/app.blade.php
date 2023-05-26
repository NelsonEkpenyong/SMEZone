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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">

    $(document).ready(function() {
      $('.comment-form').each( function(index) {
        var textareaSelector = $(this).find('textarea');
        textareaSelector.attr('id', 'exampleFormControlTextarea' + (index + 1));

        textareaSelector.emojioneArea({
          pickerPosition: 'up'
        });
      });
    });
  </script>
  <!-- End of Js -->
</body>
</html>

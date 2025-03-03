@php
  $phoneNumber = '+90 - 5060391843';
  $Email = 'tiraz.clinic@gmail.com';
@endphp

<!DOCTYPE html>
<html class="no-js"  lang="en">
<head>
  <!-- Meta Tags -->
    {!! $content !!}
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Page Title -->
  <title>Nischinto - Medical landing page HTML template</title>
  <!-- Favicon Icon -->
  <link rel="icon" href="assets/img/favicon.png" />
  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/fontawesome.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/slick.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/lightgallery.min.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/animate.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/jQueryUi.min.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/textRotate.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/select2.min.css") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" />
  <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>
<body  class="{{ App::isLocale('ar') ? 'rtl' : "" }}">
    <div class="st-perloader">
      <div class="st-perloader-in">
        <div class="st-wave-first">
          <svg   enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></g></svg>
        </div>
        <div class="st-wave-second">
          <svg   enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></g></svg>
        </div>
      </div>
    </div>
    @include('layout.Header')

    @yield('content')

    @include('layout.Footer')


  <!-- Scripts -->
  <script src="{{ asset("assets/js/vendor/modernizr-3.5.0.min.js") }}"></script>
  <script src="{{ asset("assets/js/vendor/jquery-1.12.4.min.js") }}"></script>
  <script src="{{ asset("assets/js/isotope.pkg.min.js") }}"></script>
  <script src="{{ asset("assets/js/jquery.slick.min.js") }}"></script>
  <script src="{{ asset("assets/js/mailchimp.min.js") }}"></script>
  <script src="{{ asset("assets/js/counter.min.js") }}"></script>
  <script src="{{ asset("assets/js/lightgallery.min.js") }}"></script>
  <script src="{{ asset("assets/js/ripples.min.js") }}"></script>
  <script src="{{ asset("assets/js/wow.min.js") }}"></script>
  <script src="{{ asset("assets/js/jQueryUi.js") }}"></script>
  <script src="{{ asset("assets/js/textRotate.min.js") }}"></script>
  <script src="{{ asset("assets/js/select2.min.js") }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="{{ asset("assets/js/main.js") }}"></script>



<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif

    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
</script>
</body>
</html>

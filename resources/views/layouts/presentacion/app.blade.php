<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Webartinfo">
      <meta name="author" content="Webartinfo">
      @yield('meta')

      <title>@yield('title')</title>

      <link rel="icon" type="image/png" href="img/iconos/logo_transparent.png">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="{{ asset('css/icons/css/materialdesignicons.min.css') }}" media="all" rel="stylesheet" type="text/css" />

      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      @yield('css')
   </head>
   <body>
      @include('layouts.presentacion.header')

      @yield('content')

      @yield('modals')


      <script src="{{ asset('js/app.js') }}"></script>

      @yield('scripts')
   </body>
</html>

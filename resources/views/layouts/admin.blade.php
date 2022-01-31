<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <!-- <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" /> -->

  <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet"> -->
</head>

<body class="g-sidenav-show  bg-gray-200">
  @include('layouts.inc.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminnav')
    
    @yield('content')
    
    @include('layouts.inc.adminfooter')
  </main>
  @include('layouts.inc.adminfixedplugin')

  <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
  <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>
  
  @yield('scripts')

  <script src="{{ asset('admin/js/material-dashboard.min.js') }}" defer></script>
</body>

</html>
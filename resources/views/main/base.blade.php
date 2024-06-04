<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content={{ csrf_token() }}>
  <link href={{ asset('css/reset.css') }} rel="stylesheet">
  <link href={{ asset('css/app.css') }} rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chartist/dist/chartist.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chartist/dist/chartist.min.js"></script>
  {{-- <script src="https://unpkg.com/react@17/umd/react.development.js"></script>と<script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script> --}}
  <title>@yield('title')</title>
</head>
<body>
  @yield('menu')
  @yield('compared_product_detail')
  @yield('other_product_register')
  @yield('proposed_product_detail')
  @yield('proposed_product_register')
  @yield('proposed_product_continue')
  {{-- @yield('proposed_product_detail') --}}
  @yield('compare')
  @yield('choice')
  <script type="module" src="{{ asset('/js/main.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content={{ csrf_token() }}>
  <link rel="stylesheet" href={{ asset('/css/reset.css') }}>
  <script src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="crossorigin="anonymous"></script>
  <title>@yield('title')</title>
</head>
<body>
  @yield('menu')
  @yield('other_product_edit')
  @yield('other_product_register')
  @yield('own_product_edit')
  @yield('own_product_register')
  @yield('compare')
  <script src="{{ asset('/js/compare.js') }}"></script>
</body>
</html>

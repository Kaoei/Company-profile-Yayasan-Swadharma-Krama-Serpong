<!doctype html>
<html data-theme="light" lang="{{ str_replace('-', '-', app()->getlocale())  }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('components.nav')

  <h1>Hello world</h1>
</body>
</html>
<!doctype html>
<html data-theme="light" lang="{{ str_replace('-', '-', app()->getlocale())  }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  
  <title>Yayasan Swadharma Krama</title>
  {{-- fontawesome --}}
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">
</head>
<body>
  @include('layouts.nav')

  

  @include('layouts.preline')
</body>
</html>
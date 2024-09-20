<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 11 Task List App</title>
  @yield('styles')
</head>
<body>
  <h1 class="title">@yield('title')</h1>
<div class="content">
  @if(session()->has('success'))
  <div>
    {{session('success')}}
  </div>
  @endif
  @yield('content')
</div>
</body>
</html>

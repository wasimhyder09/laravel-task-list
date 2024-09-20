<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 11 Task List App</title>
  <script src="https://cdn.tailwindcss.com"></script>
  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md text-slate-700 px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }
    .link {
      @apply font-medium text-gray-700 underline decoration-pink-500
    }
    label {
      @apply block uppercase text-slate-700 mb-2
    }
    input, textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 leading-tight focus:outline-none
    }
    .error {
      @apply text-red-500 text-sm mt-1
    }
  </style>
  {{-- blade-formatter-enable --}}
</head>
<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="text-2xl mb-4">@yield('title')</h1>
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

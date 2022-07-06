<html>
<head>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="text-gray-900 bg-gray-300 dark:bg-gray-800 dark:text-gray-400">

<div class="top-0 left-0 w-full py-2 bg-amber-300 text-gray-800 dark:bg-amber-600 dark:text-gray-300">
    <a class="d:block pl-1" href="{{route('home')}}">Hey</a>
</div>

@yield('content')

@yield('scripts')
</body>
</html>

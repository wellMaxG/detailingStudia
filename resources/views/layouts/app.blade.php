<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page.title', config('app.name'))</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="d-flex flex-column justify-content-between min-vh-100 bg-dark text-white" id="app">
        
        @include('includes.header')
        
        <main> 
    
            <div class="flex-grow-1 py-3">
            
            @yield('content')
            
            </div>
            
        </main>

        @include('includes.footer')

    </div>

</body>

</html>

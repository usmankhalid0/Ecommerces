<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Admin Panal</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}"> 
</head>
<body>
    <main class="py-4">        
        @yield('content')
    </main>
</body>
</html>

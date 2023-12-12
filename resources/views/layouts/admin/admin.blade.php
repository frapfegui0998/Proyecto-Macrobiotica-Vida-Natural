<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        button {
            background-color: #4267B2;
           
        }

        
    </style>

</head>

<body class="font-sans antialiased" >
    <div class="min-h-screen bg-gray-100">
        <div class="flex-col md:flex md:flex-row md:min-h-screen">
            @include('layouts.admin.navigationAdmin')
            <!-- Page Content -->
            <main class="w-full" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url('{{ asset('images/background-admin.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center; min-height: 100vh;">
                    {{ $slot }}
            </main>
            
        </div>
    </div>
</body>

</html>

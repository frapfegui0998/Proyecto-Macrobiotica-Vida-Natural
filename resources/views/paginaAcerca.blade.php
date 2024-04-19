<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Macrobiótica Vida Natural</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/macrobiotica.jpg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
    </style>
    <style>
        /* Estilo para el título */
        .navbar-brand {
            color: #FFFFFF;
            /* Color amarillo */
            font-size: 20px;
            /* Tamaño de fuente ajustado */
            font-weight: bold;
            /* Negrita */
        }

        /* Estilo para los elementos del menú */
        .navbar-nav li a {
            color: white;
            transition: background-color 0.3s, border-radius 0.3s;
        }

        /* Hover para los elementos del menú */
        .navbar-nav li a:hover {
            background-color: #24E7D5;
            /* Verde */
            border-radius: 50px;
            /* Bordes curveados */
        }
    </style>

</head>

<header class="font-sans antialiased">
    @include('layouts.navigationPaginaPrincipal')
</header>

<body>
    @include('layouts.acerca-de')
</body>


</html>

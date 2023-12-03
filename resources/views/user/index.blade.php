<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Macrobiótica Vida Natural</title>

    <style>
        .productos {
            display: flex;
            flex-wrap: wrap;
            margin-left: 2rem;
            padding-left: 2rem;
        }

        .card {
            margin-left: 2rem;
            margin-top: 1rem;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/macrobiotica.jpg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .carousel-container {
            max-width: 100%;
            margin-top: 80px;
        }
    </style>
</head>

<header class="font-sans antialiased">
    @include('layouts.navigationPaginaPrincipal')
</header>

<div class="container">  
    <div class="productos">
        @foreach ($products as $product)
            <div class="card">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

</html>

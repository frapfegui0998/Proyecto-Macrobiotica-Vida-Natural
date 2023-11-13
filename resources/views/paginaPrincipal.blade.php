<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macrobiótica Vida Natural</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/macrobiotica.jpeg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .owl-carousel {
            width: 80%;
            margin: auto; /* Para centrar el carousel */
            border: 15px solid #ffff; /* Agrega un contorno blanco alrededor */
        }

        .carousel-img {
            width: 100%;
            height: 350px;
            display: block;
        }

        .owl-prev, .owl-next {
            font-size: 24px;
            color: #fff;
            background: #000;
            padding: 10px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="flex-col md:flex md:flex-row md:min-h-screen">
                @include('layouts.navigationPaginaPrincipal')
            </div>
        </div>
    </nav>

    <div class="owl-carousel">
        <div><img class="carousel-img" src="{{ asset('images/Producto1.jpg') }}" alt="Imagen 1"></div>
        <div><img class="carousel-img" src="{{ asset('images/Producto2.jpg') }}" alt="Imagen 2"></div>
        <div><img class="carousel-img" src="{{ asset('images/Producto3.jpg') }}" alt="Imagen 3"></div>
        <div><img class="carousel-img" src="{{ asset('images/Producto4.jpg') }}" alt="Imagen 4"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true, // Muestra las flechas de navegación
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });
        });
    </script>
</body>
</html>

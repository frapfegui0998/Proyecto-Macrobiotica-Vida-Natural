<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Macrobiotica Vida Natural</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/656cf3c3ff45ca7d4786774e/1hgopgcob';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

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

    /* Estilo para el botón de logout */
    .btn-logout {
        background-color: #1790A9;
        /* Azul */
        border-color: #1790A9;
        /* Azul */
        color: #ffffff !important;
        /* Blanco */
        padding: 6px 12px;
        /* Reducir el padding */
        font-size: 14px;
        /* Reducir el tamaño de la fuente */
        border-radius: 5px;
        transition: background-color 0.3s, color 0.3s;
        border-radius: 50px;
    }

    .btn-logout:hover {
        background-color: #24E7D5;
        /* Verde oscuro */
        color: #ffffff;
        /* Blanco */
    }

    /* Estilo para el elemento de login al lado derecho */
    .navbar-right {
        padding-right: 20px;
        /* Agregar padding al lado derecho */
    }

    /* Estilo para el botón de Facebook */
    .btn-primary {
        background-color: #4267B2;
        /* Azul de Facebook */
    }

    .navbar-nav>li {
        margin-left: 10px;
        margin-right: 10px;
        font-size: 15.4px;
        transition: background-color 0.3s, border-radius 0.3s;
    }

    .navbar-nav li a:hover {
        background-color: #24E7D5;
        /* Verde */
        border-radius: 50px;
        /* Bordes curveados */
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand href="/">Macrobiótica Vida Natural</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars" style="color:#fff; font-size:25px;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav" style="padding-left:70px;">
                    <li><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                    <li><a class="nav-link" href="{{ url('/contacto') }}">Contáctanos</a></li>
                    <li><a class="nav-link" href="{{ url('/acerca') }}">Acerca de Nosotros</a></li>
                    <li><a class="nav-link" href="{{ url('/productos') }}">Productos</a></li>
                    @role('admin')
                        <li><a class="nav-link" href="{{ url('admin/') }}">Panel administrativo</a></li>
                    @endrole
                </ul>
                <!-- Botón de logout -->
                <ul class="nav navbar-nav navbar-right">
                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-logout" style= "margin-top: 8px;">
                                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                                </button>
                            </form>
                        </li>
                    @else
                        <!-- Botón de login -->
                        <li><a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-user"
                                    style="padding-right: 5px;"></i>
                                <span> Iniciar sesión</span></a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/56eb74c3d5.js" crossorigin="anonymous"></script>


</html>

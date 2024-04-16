<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        /* Estilo para el título */
        .navbar-brand {
            color: #FFFFFF;
            /* Color amarillo */
            font-size: 24px;
            /* Tamaño de fuente más grande */
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
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <!-- Título estilizado -->
            <a class="navbar-brand" href="/">Macrobiótica Vida Natural</a>
            <!-- Botón de hamburguesa para dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Menú de navegación -->
                <ul class="nav navbar-nav">
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
                                <button type="submit" class="btn btn-logout">
                                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                                </button>
                            </form>
                        </li>
                    @else
                        <!-- Botón de login -->
                        <li><a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-user"></i>
                                <span>Login</span></a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>

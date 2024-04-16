<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Macrobiótica</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/manzanas.jpg') }}');
            background-size: cover;
            background-position: center center;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 45px;
            width: 300px;
            text-align: left;
        }

        /* Establece el espaciado entre los botones */
        .green-border-button-container {
            margin-bottom: 20px;
            /* Ajusta el espaciado entre el botón de registrarse y el botón de regresar */
        }

        /* Ajusta el tamaño del botón de regresar para que sea igual al de iniciar sesión y registrarse */
        .back-button {
            width: 100%;
            /* Ancho al 100% del contenedor */
            padding: 10px 20px;
            /* Mantén el padding igual que los otros botones */
            font-size: 15px;
            /* Mantén el tamaño de fuente igual que los otros botones */
            margin: 0;
            /* Elimina cualquier margen predeterminado */
            box-sizing: border-box;
            /* Incluye el padding y el borde en el ancho total */
        }


        .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
            border-radius: 50%;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        input {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #ea921f;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 15px;
        }

        button:hover {
            background-color: #be8842;
        }

        .green-border-button {
            width: 86%;
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            border: 2px solid green;
            color: green;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.2s, color 0.2s;
            font-size: 15px;
            text-align: center;
        }

        .green-border-button:hover {
            background-color: green;
            color: rgba(255, 255, 255, 0.7);
        }

        .forgot-password-link {
            font-size: 13px;
        }

        .back-button {
            display: block;
            background-color: #808080;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #666666;
        }
    </style>
</head>

<body>
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />
    <div class="login-container">
        <div class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Mi Imagen">

        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Correo Eletrónico')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" autofocus
                    autocomplete="username" placeholder="ejemplo@ejemplo.com" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Contraseña')" />
                <x-text-input id="password" type="password" name="password" autocomplete="current-password"
                    placeholder="********" />
                <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Forgot your Password? / Login-->
            <div class="button-container">
                @if (Route::has('password.request'))
                    <a class="forgot-password-link"
                        href="{{ route('password.request') }}">{{ __('¿Olvidaste la contraseña?') }}</a>
                @endif
                <x-primary-button>
                    {{ __('Iniciar sesión') }}
                </x-primary-button>
            </div>

            <!-- Register -->
            <div class="green-border-button-container">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="green-border-button ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Registrarse
                    </a>
                @endif
            </div>
            <a href="{{ url('/') }}" class="back-button">Regresar a página principal</a>
        </form>

</body>

</html>

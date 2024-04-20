<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            background-color: rgba(242, 242, 242, 0.9);
        }

        input[type=submit] {
            background-color: #337ab7;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container-form {
            border-radius: 5px;
            background-color: rgba(242, 242, 242, 0.8);
            padding: 80px;
            margin-top: 60px;

        }
    </style>
</head>

<body>
    <!-- WARNING -->
    @if (session('message'))
        <div class="max-w-full mx-auto">
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">¡Alerta!</span> {{ session('message') }}
                </div>
            </div>
        </div>
    @endif

    @if (session('deleted'))
        <div class="max-w-full mx-auto">
            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">¡Alerta!</span> {{ session('deleted') }}
                </div>
            </div>
        </div>
    @endif
    <div class="container-form">
        <h2>Contáctanos</h2>
        <form id="contact-form" method="POST" action="{{ route('enviar.correo') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" id="first_name" name="first_name" placeholder="Tu nombre.."
                    value="{{ old('first_name') }}">
            </div>
            @error('first_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" id="last_name" name="last_name" placeholder="Tus apellidos.."
                    value="{{ old('last_name') }}">
            </div>
            @error('last_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="subject">Motivo</label>
                <input type="text" id="subject" name="subject" placeholder="¿Por qué nos contactas?"
                    value="{{ old('subject') }}">
            </div>
            @error('subject')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="message">Puede formular solicitudes de productos o realizar consultas con respecto a los
                    mismos</label>
                <textarea id="message" name="message" placeholder="Escribe tu lista de productos" style="height:200px"
                    value="{{ old('message') }}"></textarea>
            </div>
            @error('message')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <br>
            <button type="submit"
                class="group relative h-12 w-32 overflow-hidden rounded-lg bg-[#4267B2] text-lg font-bold text-black">
                Enviar correo
                <div
                    class="absolute inset-0 h-full w-full scale-0 rounded-lg transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                </div>
            </button>
        </form>
    </div>
</body>

</html>

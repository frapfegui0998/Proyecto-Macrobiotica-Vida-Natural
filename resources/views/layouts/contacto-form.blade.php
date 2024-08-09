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


    <div class="container-form">
        <div style="margin: auto; max-width: 50%">
            @if (session('message'))
                <div
                    style="display:flex; background: rgb(68, 96, 252); margin: 1px; padding: 1px; border-radius: 8px; justify-content: center;">
                    <p class="" style="color: #fff; margin-right: 5px;">¡Alerta! </p>
                    <p style="color: #fff; margin-left: 5px; margin-right: 5px;">{{ session('message') }}</p>
                </div>
            @endif


            @if (session('deleted'))
                <div
                    style="display:flex; background: rgb(68, 96, 252); margin: 1px; padding: 1px; border-radius: 8px; justify-content: center;">
                    <p class="" style="color: #fff; margin-right: 5px;">¡Alerta! </p>
                    <p style="color: #fff; margin-left: 5px; margin-right: 5px;">{{ session('deleted') }}</p>
                </div>
            @endif


        </div>
        <h2>Contáctanos</h2>
        <form id="contact-form" method="POST" action="{{ route('enviar.correo') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" id="first_name" name="first_name" placeholder="Nombre.."
                    value="{{ old('first_name') }}">
            </div>
            @error('first_name')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" id="last_name" name="last_name" placeholder="Apellidos.."
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
                    mismos..</label>
                <textarea id="message" name="message" placeholder="Escribe tu lista de productos o tus consultas hacia los mismos.."
                    style="height:200px" value="{{ old('message') }}"></textarea>
            </div>
            @error('message')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
            <br>
            <button type="submit"
                class="group relative h-12 w-32 overflow-hidden rounded-lg bg-[#4267B2] text-lg font-bold text-black">
                Enviar correo electrónico
                <div
                    class="absolute inset-0 h-full w-full scale-0 rounded-lg transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                </div>
            </button>
        </form>
    </div>
</body>

</html>

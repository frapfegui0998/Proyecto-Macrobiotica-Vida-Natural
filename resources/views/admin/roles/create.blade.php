<x-admin-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Add Users Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>
            body {
                background-color: #4267B2;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .form-group input {
                width: 100%;
                padding: 15px;
                /* Increase padding for larger size */
                font-size: 24px;
                /* Increase font size for larger text */
            }

            .btn-primary {
                background-color: #4267B2;
                border: none;
                padding: 15px 30px;
                /* Increase padding for larger button */
                font-size: 24px;
                /* Increase font size for larger text */
                color: #fff;
            }

            .btn-primary:hover {
                background-color: #4f4f4f;
                /* Darker green on hover */
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left mb-2">
                        <h2>Agregar rol</h2>
                    </div>
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="flex justify-center my-4"> <!-- Centrar el contenido -->
                    <div class="w-full md:w-1/2">
                        <!-- Mantener el input en la mitad del ancho en dispositivos medianos y superiores -->
                        <div class="mb-2">
                            <label for="name"
                                class="py-2 mb-1 block text-base font-medium text-[#07074D] text-center">
                                <!-- Centrar el texto -->
                                Nombre de el rol
                            </label>
                            <input type="text" name="name" placeholder="Rol" required
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-4 text-xl font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md mb-1" />
                        </div>
                        @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-center"> <!-- Centrar los botones -->
                    <button type="submit"
                        class="mr-3 group relative h-12 w-32 overflow-hidden rounded-lg bg-[#4267B2] text-lg font-bold text-white">
                        Crear
                        <div
                            class="absolute inset-0 h-full w-full scale-0 rounded-lg transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                        </div>
                    </button>
                    <a href="{{ route('admin.roles.index') }}"
                        class="flex items-center justify-center h-12 px-6 font-semibold text-white transition duration-500 ease-in-out transform bg-gray-700 rounded-lg hover:bg-gray-600 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                        <span class="inline-block">Regresar</span>
                    </a>
                </div>
            </form>
        </div>
    </body>

    </html>
</x-admin-layout>

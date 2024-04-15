<x-admin-layout>
    <!-- component -->

    <head>
        <style>
            .btn-primary {
                background-color: #4267B2;
            }

            .container-form {
                border-radius: 5px;
                background-color: rgba(242, 242, 242, 0.8);
                padding: 80px;
                margin-top: 60px;
            }
        </style>
    </head>

    <body class="antialiased font-sans bg-gray-200">
        <div class="container mx-auto px-4 sm:px-8">
            <!-- WARNING -->
            @if (session('message'))
                <div class="max-w-full mx-auto">
                    <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
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
            <!-- ACTUALIZACIÓN EXITOSA -->
            @if (session('updated'))
                <div class="max-w-full mx-auto">
                    <div class="flex bg-blue-300 rounded-lg p-4 mb-4 text-sm text-blue-800" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">¡Alerta!</span> {{ session('updated') }}
                        </div>
                    </div>
                </div>
            @endif
            <!-- ERROR CATCH -->
            @if (session('error'))
                <div class="max-w-full mx-auto">
                    <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <div>
                            <span class="font-medium">¡Alerta!</span> {{ session('error') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight mb-4 text-white">Excepciones</h2>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">


                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Excepción
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($log_errors as $log_error)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $log_error->message }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <a href="{{ route('admin.logError.show', ['logError' => $log_error->id]) }}"
                                                class="text-gray-900 whitespace-no-wrap">Detalles</a>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <form method="POST" class="inline"
                                                action="{{ route('admin.logError.destroy', ['logError' => $log_error->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </body>
</x-admin-layout>

<x-admin-layout>

    <!-- component -->
    <div class="flex items-center justify-center p-12">

        <!-- Author: FormBold Team -->
        <!-- Learn More: https://formbold.com -->
        <div class="mx-auto w-full max-w-[550px]">
            <div class="text-white">Nombre de Usuario: {{ $user->name }}</div>
            <div class="text-white">Correo electrónico: {{ $user->email }}</div>

            <!-- Roles -->
            <div>
                <h2 class="pt-10 block text-base font-bold text-white">Roles del Usuario</h2>
                @if ($user->roles)
                    @foreach ($user->roles as $user_role)
                        <form method="POST"
                            action="{{ route('admin.users.roles.remove', [$user->id, $user_role->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ $user_role->name }}</button>
                        </form>
                    @endforeach
                @endif

                <!-- ELIMINACIÓN EXITOSA -->
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

                <!-- ERROR AL REVOCAR PERMISO -->
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

                <!-- CREACIÓN EXITOSA -->
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
                <form action="{{ route('admin.users.roles', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="-mx-3 flex flex-wrap py-3">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="role" class="py-2 mb-3 block text-base font-medium text-white">
                                    Asignar Rol
                                </label>
                                <select name="role" id="role"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                            <!--  -->

                        </div>
                    </div>
                    <div>
                        <a href="{{ route('admin.users.index') }}" class="px-4">
                            <button type="button"
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                                Regresar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button>
                        </a>
                        <button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                            Asignar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Permisos -->
            <div>
                <h2 class="pt-10 block text-base font-bold text-white">Permisos del Usuario</h2>
                @if ($user->permissions)
                    @foreach ($user->permissions as $user_permission)
                        <form method="POST"
                            action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">{{ $user_permission->name }}</button>
                        </form>
                    @endforeach
                @endif

                <form action="{{ route('admin.users.permissions', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    <div class="-mx-3 flex flex-wrap py-3">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="permission" class="py-2 mb-3 block text-base font-medium text-white">
                                    Asignar Permiso
                                </label>
                                <select name="permission" id="permission"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                    @foreach ($permissions as $permission)
                                        <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('permission')
                                <span class="text-red-400 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <a href="{{ route('admin.users.index') }}" class="px-4">
                            <button type="button"
                                class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                                Regresar
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                                </div>
                            </button>
                        </a>
                        <button type="submit"
                            class="group relative h-10 w-28 overflow-hidden rounded-2xl bg-gray-400 text-lg font-bold text-white">
                            Asignar
                            <div
                                class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-75 group-hover:scale-100 group-hover:bg-white/30">
                            </div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-admin-layout>

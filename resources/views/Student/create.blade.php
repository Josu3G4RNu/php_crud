<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Estudiante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-4 lg:px-4">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{route('Student.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="no_control">Número de Control</label>
                            <input id="no_control" name="no_control" type="text" placeholder="ejemplo: 21930194" class="form-control block mt-1 w-full">
                        </div>

                        <div class="form-group">
                            <label for="rol">Rol</label>
                            <select class='form-group block mt-1 w-full' name="rol_id" id="rol">
                                <option value="1">--Seleccione un Rol--</option>
                                @foreach ($roles as $rol)
                                    <option value="{{$rol->id}}">{{$rol->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input class="block mt-1 w-full" type="text" name="name" placeholder="Nombre" id="name">
                        </div>

                        <div class="form-group">
                            <label for="lastname">Apellidos</label>
                            <input class="block mt-1 w-full" type="text" placeholder="Apellidos" name="lastname" id="lastname">
                        </div>

                        <div class="form-group">
                            <label for="carrier">Carrera</label>
                            <select class='form-group block mt-1 w-full' name="carrier_id" id="carrier">
                                <option value="1">--Seleccione una Carrera--</option>
                                @foreach($carriers as $carrier)
                                    <option value="{{$carrier->id}}">{{$carrier->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="group">Grupo</label>
                            <input class="block mt-1 w-full" type="text" placeholder="Grupo" name="group" id="group">
                        </div>

                        <div class="form-group">
                            <label for="status">Situación del Estudiante</label>
                            <select class='form-group block mt-1 w-full' name="status_id" id="status">
                                <option value="1">Inscrito</option>
                                @foreach($status as $s)
                                    <option value="{{$s->id}}">{{$s->description}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="block mt-1 w-full" type="text" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="phone">Numero Celular</label>
                            <input class="block mt-1 w-full" type="text" name="phone" id="phone">
                        </div>

                        <div class="form-group">
                            <label for="gender">Sexo</label>
                            <select class="form-group block mt-1 w-full" name="gender" id="gender">
                                <option value="H">Hombre</option>
                                <option value="M">Mujer</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="birthdate">Fecha de Nacimiento</label>
                            <input class="block mt-1 w-full" type="date" id="birthdate" name="birthdate">
                        </div>

                        <div class="form-group">
                            <label for="town">Localidad</label>
                            <select class="form-group block mt-1 w-full" name="town_id" id="town">
                                @foreach($Towns as $town)
                                    <option value="{{$town->id}}">{{$town->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="street">Calle</label>
                            <input class="block mt-1 w-full" type="text" name="street" id="street">
                        </div>

                        <div class="form-group">
                            <label for="exterior_number">Número Exterior</label>
                            <input class="block mt-1 w-full" type="text" name="exterior_number" id="exterior_number">
                        </div>

                        <div class="form-group">
                            <label for="interior_number">Número Interior</label>
                            <input class="block mt-1 w-full" type="text" name="interior_number" id="interior_number">
                        </div>
                        <div class="text-right">
                        <x-primary-button class="mt-4" type="submit">Agregar Estudiante</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

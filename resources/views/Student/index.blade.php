<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tabla de Estudiantes') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8 text-right">
        {{-- Add Button --}}
        <a class="btn btn-primary" href="{{route('Student.create')}}" role="button">Agregar</a>
    </div>

    <div class="py-1">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark text-center">
                        <tr>
                            <th>No Control</th>
                            <th>Nombre Completo</th>
                            <th>Grupo</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                        </thead>
                        {{-- Cuerpo de la tabla --}}
                        <tbody class="text-center">
                        {{-- Información del Estudiante --}}
                        @foreach ($students as $s)
                            <tr>
                                <td>{{$s->no_control}}</td>
                                <td>{{$s->name." ".$s->lastname}}</td>
                                <td>{{$s->group}}</td>
                                <td>
                                    {{-- Botones de Acción --}}
                                    <div>
                                        <a href="{{route('Student.show', $s) }}">Más Detalles</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>

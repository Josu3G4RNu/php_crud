<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $student->name." ".$student->lastname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-right">
                    <p><strong>Última Actualización: </strong>{{$student->updated_at}}</p>
                </div>
                <div class="p-6 text-gray-900">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Número de Control: </strong>{{$student->no_control}}</li>
                        <li class="list-group-item"><strong>Rol: </strong>{{$student->rol->name}}</li>
                        <li class="list-group-item"><strong>Nombre: </strong>{{$student->name}}</li>
                        <li class="list-group-item"><strong>Apellidos: </strong>{{$student->lastname}}</li>
                        <li class="list-group-item"><strong>Carrera: </strong>{{$student->carrier->name}}</li>
                        <li class="list-group-item"><strong>Grupo: </strong>{{$student->group}}</li>
                        <li class="list-group-item"><strong>Situación: </strong>{{$student->status->description}}</li>
                        <li class="list-group-item"><strong>Correo Electrónco: </strong>{{$student->email}}</li>
                        <li class="list-group-item"><strong>Número Celular: </strong>{{$student->phone}}</li>
                        <li class="list-group-item"><strong>Sexo: </strong>{{$student->gender}}</li>
                        <li class="list-group-item"><strong>Fecha de Nacimiento: </strong>{{$student->birthdate}}</li>
                        <li class="list-group-item"><strong>Localidad: </strong>{{$student->town->name}}</li>
                        <li class="list-group-item"><strong>Calle: </strong>{{$student->street}}</li>
                        <li class="list-group-item"><strong>Número Exterior: </strong>{{$student->exterior_number}}</li>
                        <li class="list-group-item"><strong>Número Interior: </strong>{{$student->interior_number ?? '-'}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

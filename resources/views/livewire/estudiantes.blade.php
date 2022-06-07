    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Estudiantes') }}
        </h2>
    </x-slot>

<div class="py-11">
    <div class=" max-w-4xl mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white-200 shadow-xl sm:rounded-lg px-3 py-4" >   
        <button  wire:click="crear()"  class=" bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded-full">Nuevo</button>
        @if($modal)
            @include('livewire.crear')
        @endif
            <table class=" w-full table-auto  border border-red-900" style="text-align: center;">
                <thead class="border-b">
                    <tr class="bg-red-400">
                        <th class="border border-red-600">Nombre</th>
                        <th class="border border-red-600">Apellido</th>
                        <th class="border border-red-600">Edad</th>
                        <th class="border border-red-600">Sexo</th>
                        <th class="border border-red-600"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante )
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-4 border border-red-600">{{$estudiante->nombre}}</td>
                        <td class="p-4 border border-red-600">{{$estudiante->apellido}}</td>
                        <td class="p-4 border border-red-600">{{$estudiante->edad}}</td>
                        <td class="p-4 border border-red-600">{{$estudiante->sexo}}</td>
                        <td class="p-4 border border-red-600">
                        
                        <button  wire:click="editar({{$estudiante->id}})"  class=" bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 my-3 rounded-full">Editar</button>
                        
                        <button  wire:click="eliminar({{$estudiante->id}})"  class=" bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 my-3 rounded-full">Eliminar<button>
                        
                        </td>
                    </tr> 
                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

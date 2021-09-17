<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Nombre Categoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table border="1" cellspacing="0">
                        <tr>
                            <th>Id</th>
                            <th>Nombre Categoria</th>
                            <th>Descripcion</th>
                        </tr>

                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{$categoria->id}}</td>
                                <td>{{$categoria->nombre}}</td>
                                <td>{{$categoria->descripcion}}</td>
                            </tr>
                        @endforeach
                    </table>

                    <a href="{{Route("categoria.create")}}">Agregar Categoria</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

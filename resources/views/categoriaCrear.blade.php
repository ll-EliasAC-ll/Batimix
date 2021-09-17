<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Registrar Categoria de Producto
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="post" action="/categoria">
                        @csrf
                        <input type="text" name="nombre" placeholder="Ingrese Nombre de Categoria" value="{{old("nombre")}}"><br>
                        <input type="text" @error("descripcion") style="border-color: red" @enderror name="descripcion" placeholder="Descripcion del producto" value="{{old("descripcion")}}"><br>
                        <input type="submit" name="submit" Value="Guardar">
                    </form>
                    @if($errors->any())
                        <div style="color: red">
                            @foreach($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

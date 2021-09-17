<table border="1" cellspacing="0">
    <tr>
        <th>Id Categoria</th>
        <th>Nombre Producto</th>
        <th>Precio</th>
        <th>Stock</th>
    </tr>

    @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->nombreCat}}</td>
            <td>{{$producto->nombrePro}}</td>
            <td>{{$producto->Precio}}</td>
            <td>{{$producto->Stock}}</td>
        </tr>
    @endforeach
</table>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Producto</title>
    </head>
    <body>
        <h1>Producto</h1>
        <br>
        {{ $productos }}
        <br>
        <br>
        <table border ="1">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>marca</th>
                    <th>talla</th>
                    <th>precio</th>
                    <th>descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->talla }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->descripcion }}</td>
                </tr>
                 @endforeach
            </tbody>
        </table>

    </body>
</html>
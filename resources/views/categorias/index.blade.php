<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categoria</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    </head>
    <body>
        <h1>Categoria</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <a href="{{route('categorias.create') }}" class="btn btn-secondary">Agregar</a>
        <br>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre Categoria</th>
                    <th>Descripcion Categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $key => $categoria)
                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <a href="{{route('categoria.edit', $categoria->id)}}" class="btn btn-outline-primary">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('categoria.delete', $categoria->id)}}" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                </tr>
                 @endforeach
            </tbody>
        </table>
        
    </body>
</html>
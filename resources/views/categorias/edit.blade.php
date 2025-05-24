<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Categoria</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('categoria.update') }}" method="post">
 
                @csrf

                <input type="hidden" name="id" value="{{ $categoria->id }}">
 
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="{{ $categoria->nombre }}" autocomplete="off" required>
                               
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" autocomplete="off" required>
                <button type="submit">Guardar</button>
            </form>
        </pre>
    </body>
</html>
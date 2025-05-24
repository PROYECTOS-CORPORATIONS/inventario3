<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete categorias</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('categoria.destroy')}}" method="post">
 
                @csrf

                <input type="hidden" name="id" value="{{ $categoria->id }}">
 
                <label for="">Nombre</label>
                <input type="text" name="nombres" value="{{ $categoria->nombre }}" autocomplete="off" required readonly>
                               
                <label for="">Descripcion</label>
                <input type="text" name="pri_ape" value="{{ $categoria->descripcion }}" autocomplete="off" required readonly>                           
                <button type="submit">Eliminar</button>
            </form>
        </pre>
    </body>
</html>
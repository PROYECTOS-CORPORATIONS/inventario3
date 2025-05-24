<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Categoria</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('categorias.store')}}" method="post">
                @csrf
                
                <label for="">Nombre</label>
                <input type="text" name="nombres" autocomplete="off" required>

                <label for="">descripcion</label>
                <input type="text" name="descripcion" autocomplete="off" required>
                <br>
                <button type="submit">Guardar</button>

            </form>
        </pre>
    </body>
</html>
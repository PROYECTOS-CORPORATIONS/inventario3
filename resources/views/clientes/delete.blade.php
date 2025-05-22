<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete</title>
    </head>
    <body>
        <pre>
            <form action="{{ route('cliente.destroy')}}" method="post">
 
                @csrf

                <input type="hidden" name="id" value="{{ $cliente->id }}">
 
                <label for="">Nombres</label>
                <input type="text" name="nombres" value="{{ $cliente->nombres }}" autocomplete="off" required readonly>
                               
                <label for="">Primer Apellido</label>
                <input type="text" name="pri_ape" value="{{ $cliente->pri_ape }}" autocomplete="off" required readonly>
                               
                <label for="">Segundo Apellido</label>
                <input type="text" name="seg_ape" value="{{ $cliente->seg_ape }}" autocomplete="off" required readonly>
                               
                <button type="submit">Eliminar</button>
            </form>
        </pre>
    </body>
</html>
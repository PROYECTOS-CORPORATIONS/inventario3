<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clientes</title>
    </head>
    <body>
        <h1>Clientes</h1>
        <br>
        {{ $clientes }}
        <br>
        <br>
        <table border ="1">
            <thead>
                <tr>
                    <th>nombres</th>
                    <th>pri_ape</th>
                    <th>seg_ape</th>
                    <th>tipo_doc</th>
                    <th>docu-tip</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->pri_ape }}</td>
                    <td>{{ $cliente->seg_ape }}</td>
                    <td>{{ $cliente->docu_tip }}</td>
                    <td>{{ $cliente->docu_num }}</td>
                </tr>
                 @endforeach
            </tbody>
        </table>

    </body>
</html>
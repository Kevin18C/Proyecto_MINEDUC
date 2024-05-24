<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos por Catedratico</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Nombre del Catedrático</th>
                <th style="text-align: center;">Cantidad de Alumnos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($catedraticos as $catedratico)
                <tr>
                    <td>{{ $catedratico->nombre_catedratico }}</td>
                    <td style="text-align: center;">{{ $catedratico->inscripciones_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>

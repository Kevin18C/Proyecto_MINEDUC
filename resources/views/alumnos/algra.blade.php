<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Escuela</th>
                <th style="text-align: center;">Total de Alumnos</th>
                <th style="text-align: center;">Parvulos 1</th>
                <th style="text-align: center;">Parvulos 2</th>
                <th style="text-align: center;">Parvulos 3</th>
                <th style="text-align: center;">Primero Primaria</th>
                <th style="text-align: center;">Segundo Primaria</th>
                <th style="text-align: center;">Tercero Primaria</th>
                <th style="text-align: center;">Cuarto Primaria</th>
                <th style="text-align: center;">Quinto Primaria</th>
                <th style="text-align: center;">Sexto Primaria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($escuelas as $escuela)
                <tr>
                    <td>{{ $escuela->alumnos->first()->escuela->Escuela }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos->count() }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[1] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[2] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[3] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[4] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[5] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[6] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[7] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[8] ?? 0 }}</td>
                    <td style="text-align: center;">{{ $escuela->alumnos_por_grado[9] ?? 0 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>









</body>
</html>

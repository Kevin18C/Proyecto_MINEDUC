<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>


    <title>Total alumnos por escuela</title>
</head>

<body>

    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Escuela</th>
                    <th>Número de Alumnos</th>
                    <th>Alumnos</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($escuelas as $escuela)
                    <tr>
                        <td>{{ $escuela->Escuela }}</td>
                        <td>{{ $escuela->inscripciones_count }}</td>
                        <td>
                            <ul>
                                @foreach ($escuela->inscripciones as $alumno)
                                    <li>{{ $alumno->nombre_alumno }} - {{ $alumno->grado->Grado }}</li>
                                @endforeach


                            </ul>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>

</html>

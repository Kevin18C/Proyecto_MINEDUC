<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Clases</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Horario de Clases</h1>

        @foreach ($grados as $grado)
            <h2>Grado {{ $grado->Grado }}</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Hora</th>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miércoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($hora = 7; $hora <= 11; $hora++)
                        <tr>
                            <td>{{ $hora }}:00 - {{ $hora + 1 }}:00</td>
                            @foreach ($dias as $dia)
                                <td>
                                    @foreach ($grado->horarios as $horario)
                                        @if ($horario->hora_inicio == sprintf('%02d:00', $hora) && $horario->dia_semana == $dia)
                                            {{ $horario->curso->Curso }}
                                        @endif
                                    @endforeach
                                </td>
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        @endforeach
    </div>
</body>
</html>

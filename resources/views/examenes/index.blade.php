<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario de Examenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color: #6C63FF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .preprimaria {
            background-color: #FFC107;
            color: white;
        }
        .primaria {
            background-color: #4CAF50;
            color: white;
        }
        .time {
            background-color: #FF5722;
            color: white;
        }
        .header {
            background-color: #009688;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calendario de Examenes de Preprimaria</h1>
    <table>
        <thead>
        <tr class="header">
            <th class="time">Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($preprimariaSchedule as $time => $days)
            <tr>
                <td class="time">{{ $time }}</td>
                @foreach ($days as $day)
                    <td class="preprimaria">{{ $day }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>

    <h1>Calendario de Examenes de Primaria</h1>
    <table>
        <thead>
        <tr class="header">
            <th class="time">Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($primariaSchedule as $time => $days)
            <tr>
                <td class="time">{{ $time }}</td>
                @foreach ($days as $day)
                    <td class="primaria">{{ $day }}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>


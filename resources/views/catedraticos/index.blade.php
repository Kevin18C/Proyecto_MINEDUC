<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Catedraticos</title>
    <style>
        /* Estilos CSS */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .add-button {
            display: block;
            width: 150px;
            padding: 10px;
            margin: 20px auto;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .add-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Lista de Catedraticos</h1>

    <a href="{{ route('alumnos.create') }}" class="add-button">Agregar Nuevo Catedratico</a>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>curso</th>
        </tr>
        </thead>
        <tbody>
        @foreach($catedraticos as $catedratico)
            <tr>
                <td>{{ $catedratico->id_catedratico }}</td>
                <td>{{ $catedratico->nombre_catedratico }}</td>
                <td>{{ $catedratico->curso }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

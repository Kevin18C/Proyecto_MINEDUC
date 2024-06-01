<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calendario de Actividades y Exámenes</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .table > thead > tr > th {
      text-align: center;
      background-color: #343a40;
      color: #fff;
    }

    .table > tbody > tr > td {
      vertical-align: middle;
    }

    .btn-volver,
    .btn-agregar {
      margin: 0 10px; /* Espacio entre botones */
    }

    .btn-volver {
      background-color: #007bff; /* Azul */
      border-color: #007bff;
    }

    .btn-agregar {
      background-color: #28a745; /* Verde */
      border-color: #28a745;
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <div class="row">
      <div class="col-12 text-center">
        <div class="d-flex justify-content-center">
          <a href="{{ route('welcome') }}" class="btn btn-volver">Volver</a>
          <a href="{{route('actividades.create')}}" class="btn btn-agregar">Agregar Actividad</a>
        </div>
        <h1>Calendario de Actividades y Exámenes</h1>
      </div>
    </div>

    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col" class="text-center">Fecha y Hora</th>
          <th scope="col" class="text-center">Descripción</th>
          <th scope="col" class="text-center">Curso</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($eventos as $evento)
          <tr>
            <td class="text-center">{{ $evento['fecha'] }} {{ $evento['hora'] }}</td>
            <td>{{ $evento['title'] }}</td>
            <td class="text-center">{{ $evento['curso'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>

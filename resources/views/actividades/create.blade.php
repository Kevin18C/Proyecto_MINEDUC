<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Actividad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1>Crear Nueva Actividad</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('actividades.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Descripcion" class="form-label">Descripción</label>
                <input type="text" name="Descripcion" id="Descripcion" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Fechadelaactividad" class="form-label">Fecha de la Actividad</label>
                <input type="date" name="Fechadelaactividad" id="Fechadelaactividad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Horadelaactividad" class="form-label">Hora de la Actividad</label>
                <input type="time" name="Horadelaactividad" id="Horadelaactividad" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="id_curso" class="form-label">Curso</label>
                <select name="id_curso" id="id_curso" class="form-select" required>
                    @foreach($cursos as $curso)
                        <option value="{{ $curso->id }}">{{ $curso->Curso }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Actividad</button>
        </form>
    </div>
</body>
</html>

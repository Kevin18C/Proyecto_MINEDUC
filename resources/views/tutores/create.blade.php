<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Tutor</title>
</head>
<body>
    <h1>Agregar Nuevo Tutor</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <form action="{{ route('tutores.store') }}" method="POST">
        @csrf
        <label for="nombre_tutelar">Nombre del Tutor:</label>
        <input type="text" id="nombre_tutelar" name="nombre_tutelar" required>

        <label for="id_alumno">ID del Alumno:</label>
        <input type="text" id="id_alumno" name="id_alumno" required>

        <button type="submit">Guardar Tutor</button>
    </form>
</body>
</html>

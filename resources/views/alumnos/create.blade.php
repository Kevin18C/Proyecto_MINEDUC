<!-- resources/views/alumnos/create.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Alumno</title>
</head>
<body>

    <h1>Crear Nuevo Alumno</h1>

    @if ($errors->any())
        <div>
            <strong>¡Ups! Hubo un problema con los datos ingresados:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/alumnos') }}" method="post">
        @csrf

        <div>
            <label for="nombre_alumno">Nombre del Alumno:</label>
            <input type="text" id="nombre_alumno" name="nombre_alumno" value="{{ old('nombre_alumno') }}">
        </div>

        <div>
            <label for="id_catedratico">ID del Catedrático:</label>
            <input type="text" id="id_catedratico" name="id_catedratico" value="{{ old('id_catedratico') }}">
        </div>

        <div>
            <label for="id_curso">ID del Curso:</label>
            <input type="text" id="id_curso" name="id_curso" value="{{ old('id_curso') }}">
        </div>

        <div>
            <label for="id_seccion">ID de la Sección:</label>
            <input type="text" id="id_seccion" name="id_seccion" value="{{ old('id_seccion') }}">
        </div>

        <div>
            <label for="id_grado">ID del Grado:</label>
            <input type="text" id="id_grado" name="id_grado" value="{{ old('id_grado') }}">
        </div>

        <div>
            <label for="id_escuela">ID de la Escuela:</label>
            <input type="text" id="id_escuela" name="id_escuela" value="{{ old('id_escuela') }}">
        </div>

        <div>
            <label for="id_departamento">ID del Departamento:</label>
            <input type="text" id="id_departamento" name="id_departamento" value="{{ old('id_departamento') }}">
        </div>

        <div>
            <label for="id_municipio">ID del Municipio:</label>
            <input type="text" id="id_municipio" name="id_municipio" value="{{ old('id_municipio') }}">
        </div>

        <!-- Agregar más campos según sea necesario -->

        <button type="submit">Guardar Alumno</button>
    </form>

</body>
</html>

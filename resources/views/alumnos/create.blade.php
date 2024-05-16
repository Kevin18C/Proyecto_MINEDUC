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
        <label for="id_catedratico">Catedrático:</label>
        <select name="id_catedratico" id="id_catedratico">
             <option>Seleccione un catedratico</option>
        @foreach($catedraticos as $catedratico)
                <option value="{{ $catedratico->id }}">{{ $catedratico->nombre_catedratico }}</option>
            @endforeach
        </select>

    </div>

    <div>
        <label for="id_curso">Curso:</label>
        <select name="id_curso" id="id_curso">
            <option value="">Selecciona un curso</option>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->Curso }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="id_seccion">Sección:</label>
        <select name="id_seccion" id="id_seccion">
            <option value="">Selecciona una sección</option>
            @foreach($secciones as $seccion)
                <option value="{{ $seccion->id }}">{{ $seccion->Seccion }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="id_grado">Grado:</label>
        <select name="id_grado" id="id_grado">
            <option value="">Selecciona un grado</option>
            @foreach($grados as $grado)
                <option value="{{ $grado->id }}">{{ $grado->Grado }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="id_escuela">Escuela:</label>
        <select name="id_escuela" id="id_escuela">
            <option value="">Selecciona una escuela</option>
            @foreach($escuelas as $escuela)
                <option value="{{ $escuela->id }}">{{ $escuela->Escuela }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="id_departamento">Departamento:</label>
        <select name="id_departamento" id="id_departamento">
            <option value="">Selecciona un departamento</option>
            @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}">{{ $departamento->departamento }}</option>
            @endforeach
        </select>
    </div>



    <div>
        <label for="id_municipio">Municipio:</label>
        <select name="id_municipio" id="id_municipio">
            <option value="">Selecciona un municipio</option>
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}">{{ $municipio->municipio }}</option>
            @endforeach
        </select>
    </div>

    <!-- Agregar más campos según sea necesario -->

    <button type="submit">Guardar Alumno</button>
</form>




</body>
</html>

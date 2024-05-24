<!-- resources/views/alumnos/create.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Alumno</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .btn-primary {
            width: 100%;
        }
        .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
                <h1 class="form-title">Crear Nuevo Alumno</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
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

                    <div class="form-group">
                        <label for="nombre_alumno">Nombre del Alumno:</label>
                        <input type="text" class="form-control @error('nombre_alumno') is-invalid @enderror" id="nombre_alumno" name="nombre_alumno" value="{{ old('nombre_alumno') }}">
                        @error('nombre_alumno')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="fecha_de_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control @error('fecha_de_nacimiento') is-invalid @enderror" id="fecha_de_nacimiento" name="fecha_de_nacimiento" value="{{ old('fecha_de_nacimiento') }}">
                        @error('fecha_de_nacimiento')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telefono">Número de Teléfono:</label>
                        <input type="tel" class="form-control @error('telefono') is-invalid @enderror" id="telefono" name="telefono" pattern="[0-9]{8}" maxlength="8" value="{{ old('telefono') }}">
                        @error('telefono')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select class="form-control @error('genero') is-invalid @enderror" name="genero" id="genero">
                            <option value="">Seleccione el género</option>
                            <option value="masculino" {{ old('genero') == 'masculino' ? 'selected' : '' }}>Masculino</option>
                            <option value="femenino" {{ old('genero') == 'femenino' ? 'selected' : '' }}>Femenino</option>
                        </select>
                        @error('genero')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_catedratico">Catedrático:</label>
                        <select class="form-control @error('id_catedratico') is-invalid @enderror" name="id_catedratico" id="id_catedratico">
                            <option value="">Seleccione un catedrático</option>
                            @foreach($catedraticos as $catedratico)
                                <option value="{{ $catedratico->id }}">{{ $catedratico->nombre_catedratico }}</option>
                            @endforeach
                        </select>
                        @error('id_catedratico')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_curso">Curso:</label>
                        <select class="form-control @error('id_curso') is-invalid @enderror" name="id_curso" id="id_curso">
                            <option value="">Seleccione un curso</option>
                            @foreach($cursos as $curso)
                                <option value="{{ $curso->id }}">{{ $curso->Curso }}</option>
                            @endforeach
                        </select>
                        @error('id_curso')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_seccion">Sección:</label>
                        <select class="form-control @error('id_seccion') is-invalid @enderror" name="id_seccion" id="id_seccion">
                            <option value="">Seleccione una sección</option>
                            @foreach($secciones as $seccion)
                                <option value="{{ $seccion->id }}">{{ $seccion->Seccion }}</option>
                            @endforeach
                        </select>
                        @error('id_seccion')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_grado">Grado:</label>
                        <select class="form-control @error('id_grado') is-invalid @enderror" name="id_grado" id="id_grado">
                            <option value="">Seleccione un grado</option>
                            @foreach($grados as $grado)
                                <option value="{{ $grado->id }}">{{ $grado->Grado }}</option>
                            @endforeach
                        </select>
                        @error('id_grado')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_escuela">Escuela:</label>
                        <select class="form-control @error('id_escuela') is-invalid @enderror" name="id_escuela" id="id_escuela">
                            <option value="">Seleccione una escuela</option>
                            @foreach($escuelas as $escuela)
                                <option value="{{ $escuela->id }}">{{ $escuela->Escuela }}</option>
                            @endforeach
                        </select>
                        @error('id_escuela')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="form-group">
                        <label for="id_municipio">Municipio:</label>
                        <select class="form-control @error('id_municipio') is-invalid @enderror" name="id_municipio" id="id_municipio">
                            <option value="">Seleccione un municipio</option>
                            @foreach($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->municipio }}</option>
                            @endforeach
                        </select>
                        @error('id_municipio')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Guardar Alumno</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

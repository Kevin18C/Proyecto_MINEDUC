<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Catedrático</title>
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
                <h1 class="form-title">Crear Nuevo Catedrático</h1>

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

                <form action="{{ route('catedraticos.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="nombre_catedratico">Nombre del Catedrático:</label>
                        <input type="text" class="form-control @error('nombre_catedratico') is-invalid @enderror" id="nombre_catedratico" name="nombre_catedratico" value="{{ old('nombre_catedratico') }}" required>
                        @error('nombre_catedratico')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="id_curso">Curso:</label>
                        <select class="form-control @error('id_curso') is-invalid @enderror" name="id_curso" id="id_curso" required>
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
                        <label for="id_grado">Grado:</label>
                        <select class="form-control @error('id_grado') is-invalid @enderror" name="id_grado" id="id_grado" required>
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
                        <label for="id_seccion">Sección:</label>
                        <select class="form-control @error('id_seccion') is-invalid @enderror" name="id_seccion" id="id_seccion" required>
                            <option value="">Seleccione una sección</option>
                            @foreach($secciones as $seccion)
                                <option value="{{ $seccion->id }}">{{ $seccion->Seccion }}</option>
                            @endforeach
                        </select>
                        @error('id_seccion')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Guardar Catedrático</button>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <form action="{{ route('catedraticos.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre_catedratico">Nombre del Catedrático:</label>
            <input type="text" id="nombre_catedratico" name="nombre_catedratico" required>
        </div>
        <div>
            <label for="id_curso">Curso:</label>
            <select name="id_curso" id="id_curso" required>
                @foreach($cursos as $curso)
                    <option value="{{ $curso->id }}">{{ $curso->Curso }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="id_grado">Grado:</label>
            <select name="id_grado" id="id_grado" required>
                @foreach($grados as $grado)
                    <option value="{{ $grado->id }}">{{ $grado->Grado }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="id_seccion">Sección:</label>
            <select name="id_seccion" id="id_seccion" required>
                @php
                use App\Models\Seccion;
            @endphp
                @foreach($secciones as $seccion)
                    <option value="{{ $seccion->id }}">{{ $seccion->Seccion }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>

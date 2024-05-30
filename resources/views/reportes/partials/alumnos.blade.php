<form method="GET" action="{{ route('reportes.alumnos') }}" id="filterForm">
    <label for="id_departamento">Departamento:</label>
    <select name="id_departamento" id="id_departamento">
        <option value="">--Seleccionar Departamento--</option>
        @foreach ($departamentos as $departamento)
            <option value="{{ $departamento->id }}" {{ request('id_departamento') == $departamento->id ? 'selected' : '' }}>
                {{ $departamento->departamento }}
            </option>
        @endforeach
    </select>

    <label for="id_municipio">Municipio:</label>
    <select name="id_municipio" id="id_municipio">
        <option value="">--Seleccionar Municipio--</option>
        @foreach ($municipios as $municipio)
            <option value="{{ $municipio->id }}" {{ request('id_municipio') == $municipio->id ? 'selected' : '' }}>
                {{ $municipio->municipio }}
            </option>
        @endforeach
    </select>

    <button type="submit">Filtrar</button>
</form>

<h2>Lista de Alumnos</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Municipio</th>
            <th>Departamento</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre_alumno }}</td>
                <td>{{ $alumno->municipio->municipio }}</td>
                <td>{{ $alumno->municipio->departamento->departamento }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    document.getElementById('id_departamento').addEventListener('change', function() {
        var departamentoId = this.value;
        fetch('/get-municipios/' + departamentoId)
            .then(response => response.json())
            .then(data => {
                var municipioSelect = document.getElementById('id_municipio');
                municipioSelect.innerHTML = '<option value="">--Seleccionar Municipio--</option>';
                for (var key in data) {
                    if (data.hasOwnProperty(key)) {
                        municipioSelect.innerHTML += '<option value="' + key + '">' + data[key] + '</option>';
                    }
                }
            });
    });
    </script>

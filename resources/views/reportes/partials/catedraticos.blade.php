<h2>Reporte de Catedráticos</h2>
<form id="filter-form">
    <!-- Campos del formulario -->
    <div>
        <label for="id_departamento">Departamento:</label>
        <select name="id_departamento" id="id_departamento">
            <option value="">Seleccione un departamento</option>
            @foreach($departamentos as $departamento)
                <option value="{{ $departamento->id }}" {{ request('id_departamento') == $departamento->id ? 'selected' : '' }}>
                    {{ $departamento->departamento }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="id_municipio">Municipio:</label>
        <select name="id_municipio" id="id_municipio">
            <option value="">Seleccione un municipio</option>
            @foreach($municipios as $municipio)
                <option value="{{ $municipio->id }}" {{ request('id_municipio') == $municipio->id ? 'selected' : '' }}>
                    {{ $municipio->municipio }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="id_escuela">Escuela:</label>
        <select name="id_escuela" id="id_escuela">
            <option value="">Seleccione una escuela</option>
            @foreach($escuelas as $escuela)
                <option value="{{ $escuela->id }}" {{ request('id_escuela') == $escuela->id ? 'selected' : '' }}>
                    {{ $escuela->Escuela }}
                </option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="id_grado">Grado:</label>
        <select name="id_grado" id="id_grado">
            <option value="">Seleccione un grado</option>
            @foreach($grados as $grado)
                <option value="{{ $grado->id }}" {{ request('id_grado') == $grado->id ? 'selected' : '' }}>
                    {{ $grado->Grado }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit">Filtrar</button>
</form>

<table id="results">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Alumnos Asignados</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($catedraticos as $catedratico)
            <tr>
                <td>{{ $catedratico->id }}</td>
                <td>{{ $catedratico->nombre_catedratico }}</td>
                <td>
                    <ul>
                        @foreach ($catedratico->inscripciones as $alumno)
                            <li>{{ $alumno->nombre_alumno }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
    function loadMunicipios(departamento_id) {
        $.ajax({
            url: '/municipios/' + departamento_id,
            type: 'GET',
            success: function(data) {
                $('#id_municipio').empty().append('<option value="">Seleccione un municipio</option>');
                $.each(data, function(key, value) {
                    $('#id_municipio').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }

    function loadEscuelas(municipio_id, departamento_id) {
        $.ajax({
            url: '/escuelas/' + municipio_id + '/' + departamento_id,
            type: 'GET',
            success: function(data) {
                $('#id_escuela').empty().append('<option value="">Seleccione una escuela</option>');
                $.each(data, function(key, value) {
                    $('#id_escuela').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });
    }

    $('#id_departamento').change(function() {
        var departamento_id = $(this).val();
        if (departamento_id) {
            loadMunicipios(departamento_id);
        } else {
            $('#id_municipio').empty().append('<option value="">Seleccione un municipio</option>');
            $('#id_escuela').empty().append('<option value="">Seleccione una escuela</option>');
        }
    });

    $('#id_municipio').change(function() {
        var municipio_id = $(this).val();
        var departamento_id = $('#id_departamento').val();
        if (municipio_id) {
            loadEscuelas(municipio_id, departamento_id);
        } else {
            $('#id_escuela').empty().append('<option value="">Seleccione una escuela</option>');
        }
    });

    $('#filter-form').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '{{ route('reportes.catedraticos') }}',
            type: 'GET',
            data: formData,
            success: function(data) {
                $('#results').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud AJAX:");
                console.error("Estado: " + status);
                console.error("Error: " + error);
                console.error("Respuesta del servidor: " + xhr.responseText);
            }
        });
    });

    // Preload municipios and escuelas when page loads if a departamento or municipio is selected
    var departamento_id = $('#id_departamento').val();
    if (departamento_id) {
        loadMunicipios(departamento_id);
    }

    var municipio_id = $('#id_municipio').val();
    if (municipio_id) {
        var departamento_id = $('#id_departamento').val();
        loadEscuelas(municipio_id, departamento_id);
    }
});

</script>

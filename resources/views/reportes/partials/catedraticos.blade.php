
<h2>Reporte de Catedráticos</h2>

<form id="filter-form" class="container mb-3">
  <div class="row">
    <div class="col-md-4">
      <label for="id_departamento" class="form-label">Departamento:</label>
      <select name="id_departamento" id="id_departamento" class="form-select">
        <option value="">Seleccione un departamento</option>
        @foreach($departamentos as $departamento)
          <option value="{{ $departamento->id }}" {{ request('id_departamento') == $departamento->id ? 'selected' : '' }}>
            {{ $departamento->departamento }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="col-md-4">
      <label for="id_municipio" class="form-label">Municipio:</label>
      <select name="id_municipio" id="id_municipio" class="form-select">
        <option value="">Seleccione un municipio</option>
      </select>
    </div>

    <div class="col-md-4">
      <label for="id_escuela" class="form-label">Escuela:</label>
      <select name="id_escuela" id="id_escuela" class="form-select">
        <option value="">Seleccione una escuela</option>
      </select>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <label for="id_grado" class="form-label">Grado:</label>
      <select name="id_grado" id="id_grado" class="form-select">
        <option value="">Seleccione un grado</option>
        @foreach($grados as $grado)
          <option value="{{ $grado->id }}" {{ request('id_grado') == $grado->id ? 'selected' : '' }}>
            {{ $grado->Grado }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="col-md-4">
      <label for="id_seccion" class="form-label">Sección:</label>
      <select name="id_seccion" id="id_seccion" class="form-select">
        <option value="">Seleccione una sección</option>
        @foreach($secciones as $seccion)
          <option value="{{ $seccion->id }}" {{ request('id_seccion') == $seccion->id ? 'selected' : '' }}>
            {{ $seccion->Seccion }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-primary mt-4">Filtrar</button>
    </div>
  </div>
</form>

<table id="results" class="table table-striped">
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



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    function loadEscuelas(departamento_id, municipio_id) {
        var url = departamento_id ?
                  '{{ route("reportes.getEscuelasPorDepartamento", ":departamento_id") }}'.replace(":departamento_id", departamento_id) :
                  '{{ route("reportes.getEscuelas", ":municipio_id") }}'.replace(":municipio_id", municipio_id);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#id_escuela').empty().append('<option value="">Seleccione una escuela</option>');
                $.each(data, function(key, value) {
                    $('#id_escuela').append('<option value="'+ key +'">'+ value +'</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud AJAX:");
                console.error("Estado: " + status);
                console.error("Error: " + error);
                console.error("Respuesta del servidor: " + xhr.responseText);
            }
        });
    }

    function loadCatedraticos() {
        var departamento_id = $('#id_departamento').val();
        var municipio_id = $('#id_municipio').val();
        var escuela_id = $('#id_escuela').val();
        var grado_id = $('#id_grado').val();
        var seccion_id = $('#id_seccion').val();

        $.ajax({
            url: '{{ route("reportes.catedraticos") }}',
            type: 'GET',
            data: {
                id_departamento: departamento_id,
                id_municipio: municipio_id,
                id_escuela: escuela_id,
                id_grado: grado_id,
                id_seccion: seccion_id
            },
            success: function(data) {
                $('#results tbody').html(data);
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud AJAX:");
                console.error("Estado: " + status);
                console.error("Error: " + error);
                console.error("Respuesta del servidor: " + xhr.responseText);
            }
        });
    }

    $('#id_departamento').change(function() {
        var departamento_id = $(this).val();
        loadEscuelas(departamento_id, null);
        $('#id_municipio').val('').change();
    });

    $('#id_municipio').change(function() {
        var municipio_id = $(this).val();
        loadEscuelas(null, municipio_id);
    });

    $('#id_departamento, #id_municipio, #id_escuela, #id_grado, #id_seccion').change(function() {
        loadCatedraticos();
    });

    $('#filter-form').submit(function(e) {
        e.preventDefault();
        loadCatedraticos();
    });
});
</script>

<form method="GET" action="{{ route('reportes.alumnos') }}" id="filterForm" class="row mb-3">
    <div class="col-md-4">
      <label for="id_departamento" class="form-label">Departamento:</label>
      <select name="id_departamento" id="id_departamento" class="form-select">
        <option value="">--Seleccionar Departamento--</option>
        @foreach ($departamentos as $departamento)
          <option value="{{ $departamento->id }}" {{ request('id_departamento') == $departamento->id ? 'selected' : '' }}>
            {{ $departamento->departamento }}
          </option>
        @endforeach
      </select>
    </div>

    <div class="col-md-4">
      <label for="id_municipio" class="form-label">Municipio:</label>
      <select name="id_municipio" id="id_municipio" class="form-select">
        <option value="">--Seleccionar Municipio--</option>
      </select>
    </div>

    <div class="col-md-4">
      <button type="submit" class="btn btn-primary">Filtrar</button>
    </div>
  </form>

  <h2>Lista de Alumnos</h2>
  <table class="table table-striped">
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

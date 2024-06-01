<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard de Reportes</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    .sidebar {
      background-color: #f8f9fa;
      border-right: 1px solid #dee2e6;
      font-weight: 500;
    }
    .sidebar-sticky {
      padding: 1.5rem 1rem;
    }
    .sidebar .nav-link {
      color: #495057;
      padding: 0.75rem 1rem;
      border-radius: 0.25rem;
      transition: background-color 0.3s, color 0.3s;
    }
    .sidebar .nav-link:hover {
      background-color: #e9ecef;
      color: #343a40;
    }
    .sidebar .nav-link.active {
      background-color: #007bff;
      color: #fff;
      font-weight: bold;
    }
    .sidebar .nav-link::before {
      content: "- ";
      margin-right: 0.5rem;
    }
  </style>
</head>
<body>
  <header class="bg-primary text-white text-center py-3">
    <h1>Dashboard de Reportes</h1>
  </header>
  <div class="container-fluid">
    <div class="row">
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#" data-url="{{ route('reportes.alumnos') }}">Reporte de Alumnos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-url="{{ route('reportes.escuelas') }}">Reporte de Escuelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-url="{{ route('reportes.catedraticos') }}">Reporte de Catedráticos</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('welcome') }}" class="nav-link return-home">Regresar al Inicio</a>
            </li>
          </ul>
        </div>
      </nav>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div id="content" class="pt-3">
        </div>
      </main>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      function loadReport(url) {
        $.get(url, function(data) {
          $('#content').html(data);
          attachEventHandlers();
        });
      }

      $('#sidebar a').on('click', function(e) {
        e.preventDefault();
        var url = $(this).data('url');
        loadReport(url);
      });

      $('#sidebar a:first').click();

      // Esta función manejará el clic en el enlace "Regresar al Inicio"
      $('#sidebar a.return-home').on('click', function(e) {
        e.preventDefault();
        window.location.href = $(this).attr('href'); // Redirigir al href del enlace
      });

      function attachEventHandlers() {
        $('#filterForm').on('submit', function(e) {
          e.preventDefault();
          $.get($(this).attr('action'), $(this).serialize(), function(data) {
            $('#content').html(data);
            attachEventHandlers();
          });
        });

        $('#id_departamento').on('change', function() {
          var deptId = $(this).val();
          if (deptId) {
            $.get('/municipios/' + deptId, function(data) {
              var municipioSelect = $('#id_municipio');
              municipioSelect.empty();
              municipioSelect.append('<option value="">--Seleccionar Municipio--</option>');
              $.each(data, function(key, value) {
                municipioSelect.append('<option value="'+ key +'">'+ value +'</option>');
              });
            });
          } else {
            $('#id_municipio').empty().append('<option value="">--Seleccionar Municipio--</option>');
          }
        });
      }
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Reportes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="sidebar">
        <ul>
            <li><a href="#" data-url="{{ route('reportes.alumnos') }}">Reporte de Alumnos</a></li>
            <li><a href="#" data-url="{{ route('reportes.escuelas') }}">Reporte de Escuelas</a></li>
            <li><a href="#" data-url="{{ route('reportes.catedraticos') }}">Reporte de Catedráticos</a></li>
        </ul>
    </div>
    <div id="content">
        <!-- El contenido de los reportes se cargará aquí -->
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

<h2>Reporte de Catedráticos</h2>
<table>
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

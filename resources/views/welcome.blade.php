<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenido a la plataforma de MINEDUC</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('https://media.istockphoto.com/id/177136570/es/foto/bandera-de-guatemala-con-trazado-de-recorte.jpg?s=612x612&w=0&k=20&c=g_UeN1lG10E0P6ZGXHm88pab1q6afcQ3PhjaqCTCd4c=');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Color de fondo para el contenido */
            border-radius: 10px;
        }
        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #005eb8;
            margin-bottom: 30px;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }
        .card a {
            color: #005eb8;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }
        .card a:hover {
            color: #003366;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Bienvenido a la plataforma de MINEDUC</h1>
    </div>
    <div class="card">
        <div class="content">
            <a href="{{ route('alumnos.index') }}">Ver Lista de Alumnos</a>
        </div>
    </div>
    <div class="card">
        <div class="content">
            <a href="{{ route('catedraticos.index') }}">Ver Lista de Catedráticos</a>
        </div>
    </div>
    <div class="card">
        <div class="content">
            <a href="{{ route('tutores.index') }}">Ver Lista de Tutores</a>
        </div>
    </div>
</div>
</body>
</html>

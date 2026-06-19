<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6f8;
        }

        .construction-card {
            margin-top: 80px;
            text-align: center;
            padding: 50px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .construction-img {
            max-width: 420px;
            margin-bottom: 80px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            color: #2f6c1b;
        }

        .subtitle {
            color: gray;
            margin-top: 10px;
        }

        .badge-custom {
            background: #ffc107;
            color: black;
            padding: 8px 15px;
            border-radius: 20px;
            display: inline-block;
            margin-top: 15px;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="construction-card">

        <!-- Imagen -->
        <img src="img/construccion.png" class="construction-img" alt="En construcción">

        <!-- Texto -->
        <div class="title">Módulo de Reserva de Citas</div>

        <div class="subtitle">
            Este módulo se encuentra actualmente en desarrollo.
            Próximamente podrás agendar tus citas en línea.
        </div>

        <div class="badge-custom">
            🚧 En construcción
        </div>

        <hr>

        <p class="mt-3">
            Estamos trabajando para habilitar un sistema de reservas moderno,
            rápido y seguro.
        </p>

        <a href="/" class="btn btn-success mt-3">
            Volver al inicio
        </a>

    </div>
</div>

</body>
</html>
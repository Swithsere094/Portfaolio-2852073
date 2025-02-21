<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Correo de Contacto</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Nuevo mensaje de contacto
            </div>
            <div class="card-body">
                <h5 class="card-title">Detalles del mensaje</h5>
                <p class="card-text"><strong>Nombre:</strong> {{ $msg['name'] }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $msg['email'] }}</p>
                <p class="card-text"><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
                <p class="card-text"><strong>Mensaje:</strong></p>
                <p class="card-text">{{ $msg['content'] }}</p>
            </div>
            <div class="card-footer text-muted">
                Este correo se ha enviado desde el formulario de contacto del sitio web.
            </div>
        </div>
    </div>
</body>
</html>

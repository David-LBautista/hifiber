<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo mensaje de contacto</title>
</head>
<body style="font-family: Arial, sans-serif;">

    <h2 style="color: #333;">Nuevo mensaje de contacto</h2>

    <p>Hola,</p>

    <p>Has recibido un nuevo mensaje de contacto. Aquí están los detalles:</p>

    <ul>
        <li><strong>Nombre:</strong> {{ $contact['first-name'] }} {{ $contact['last-name'] }}</li>
        <li><strong>Correo Electrónico:</strong> {{ $contact['email'] }}</li>
        <li><strong>Télefono:</strong> {{ $contact['telefono'] }}</li>
        <li><strong>Mensaje:</strong> {{ $contact['message'] }}</li>
    </ul>

    <p>¡Por favor, responde lo antes posible!</p>

    <p>Saludos,</p>
    <p>Tu equipo de soporte</p>

</body>
</html>

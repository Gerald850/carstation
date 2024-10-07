<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h1>Hola, {{ $name }}</h1>
    <p>Gracias por registrarte en nuestro sistema. Aquí están tus datos de acceso:</p>

    <ul>
        <li><strong>Correo Electrónico:</strong> {{ $email }}</li>
        <li><strong>Contraseña:</strong> {{ $password }}</li>
    </ul>

    <p>Por favor, cambia tu contraseña después de iniciar sesión.</p>

    <p>Saludos,</p>
    <p>El equipo de {{ config('app.name') }}</p>
</body>
</html>
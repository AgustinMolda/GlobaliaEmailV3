<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Globalia Mail</title>
</head>
<body>
    <form action="{{ route('enviar-correo') }}" method="POST">
        @csrf
        <button type="submit">Enviar correo</button>
    </form>
</body>
</html>
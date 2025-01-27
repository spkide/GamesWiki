<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        /* Puedes reutilizar el estilo del login */
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registro</h2>
        <form action="procesar_registro.php" method="POST">
            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
    </div>
</body>
</html>

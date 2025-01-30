<?php
// Inicia la sesión
session_start();

// Verifica si ya está logueado
if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php"); // Redirige si ya está logueado
    exit;
}

// Definir usuario y contraseña de ejemplo
$valid_user = "admin";
$valid_pass = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura las credenciales ingresadas
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica si las credenciales son correctas
    if ($username === $valid_user && $password === $valid_pass) {
        // Almacena la información de sesión
        $_SESSION['user_id'] = $username;
        header("Location: welcome.php");
        exit;
    } else {
        $error_message = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php
    if (isset($error_message)) {
        echo "<p style='color:red;'>$error_message</p>";
    }
    ?>

    <form method="POST" action="login.php">
        <label for="username">Usuario:</label>
        <input type="text" name="username" required>
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>
        <br>

        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>

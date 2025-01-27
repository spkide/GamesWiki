<?php
session_start();

// Simulación de una base de datos (reemplázalo con tu conexión a una base de datos real)
$usuarios = [
    'usuario1' => 'contraseña123',
    'usuario2' => 'contraseña456',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validación simple
    if (isset($usuarios[$username]) && $usuarios[$username] == $password) {
        $_SESSION['usuario'] = $username;
        header('Location: bienvenida.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}
?>

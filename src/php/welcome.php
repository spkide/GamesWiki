<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Si el usuario está logueado, muestra un mensaje de bienvenida
echo "<h2>Bienvenido, " . $_SESSION['user_id'] . "!</h2>";
echo "<a href='logout.php'>Cerrar sesión</a>";

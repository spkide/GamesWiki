<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Conexión a la base de datos
    $conexion = new mysqli('localhost', 'root', '', 'tu_base_de_datos');

    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Insertar usuario
    $sql = "INSERT INTO usuarios (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conexion->query($sql) === TRUE) {
        echo "<script>alert('Registro exitoso');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    $conexion->close();
}
?>

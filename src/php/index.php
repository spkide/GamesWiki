<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('TU_CLIENT_ID');
$client->setClientSecret('TU_CLIENT_SECRET');
$client->setRedirectUri('http://localhost/callback.php'); // Cambia esto a tu URI de redirección
$client->addScope('email');
$client->addScope('profile');

$auth_url = $client->createAuthUrl();
echo "<a href='$auth_url'>Iniciar sesión con Google</a>";
?>

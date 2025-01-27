<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('TU_CLIENT_ID');
$client->setClientSecret('TU_CLIENT_SECRET');
$client->setRedirectUri('http://localhost/callback.php'); // Cambia esto a tu URI de redirección

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    // Obtener información del usuario
    $oauth = new Google_Service_Oauth2($client);
    $userInfo = $oauth->userinfo->get();

    echo "<h1>Bienvenido, " . $userInfo->name . "</h1>";
    echo "<p>Email: " . $userInfo->email . "</p>";
    echo "<img src='" . $userInfo->picture . "' alt='Foto de perfil'>";
} else {
    echo "Error al autenticar.";
}
?>

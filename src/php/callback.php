<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('1079407262165-qhh0cg8cidi37or7e9p9dghrqft92n7q.apps.googleusercontent.com');
$client->setClientSecret('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');
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

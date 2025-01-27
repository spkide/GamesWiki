<?php
require 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('1079407262165-qhh0cg8cidi37or7e9p9dghrqft92n7q.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/callback.php'); // Cambia esto a tu URI de redirección
$client->addScope('email');
$client->addScope('profile');

$auth_url = $client->createAuthUrl();
echo "<a href='$auth_url'>Iniciar sesión con Google</a>";
?>

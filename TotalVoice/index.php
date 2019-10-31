<?php
// Considero que já existe um autoloader compatível com a PSR-4 registrado
require_once "vendor/autoload.php";

use TotalVoice\Client as TotalVoiceClient;

$client = new TotalVoiceClient('b62cd09dad1462898a9baec867f19466');
$response = $client->perfil->consultaSaldo();

echo $response->getContent(); // {}

?>
<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

$client =  new Client();

try {

    $response = $client->get("https://www.mackenzie.br/processos-seletivos/vestibular-graduacao/sao-paulo-higienopolis");
    $html = $response->getBody();

} catch (GuzzleException $e) {
    echo "Página não encontrada! {$e->getMessage()}".PHP_EOL;
}
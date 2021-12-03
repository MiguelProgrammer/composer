<?php

require "../vendor/autoload.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client =  new Client();

try {

    $response = $client->request("GET","https://www.mackenzie.br/processos-seletivos/vestibular-graduacao/sao-paulo-higienopolis");
    $html = $response->getBody();

    $crawler = new Crawler();
    $crawler->addHtmlContent($html);
    $cursos = $crawler->filter('h3');

    foreach ($cursos as $curso){
        echo $curso->textContent.PHP_EOL;
    }

} catch (Exception $e) {
    echo "Não foi possível listar os cursos!\n".PHP_EOL.$e->getMessage();
}
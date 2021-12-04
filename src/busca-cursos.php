<?php

require "../vendor/autoload.php";

use GuzzleHttp\Client;
use MiguelP\BuscaCursos\modelo\modelo\BuscaCurso;
use Symfony\Component\DomCrawler\Crawler;

$client =  new Client(['base_uri' => 'https://www.mackenzie.br/']);
$crawler = new Crawler();

try {

    $buscaCursos = new BuscaCurso($client,$crawler);
    $pegaCursos = $buscaCursos->buscar("processos-seletivos/vestibular-graduacao/sao-paulo-higienopolis");

    foreach ($pegaCursos as $curso){
        echo "CURSOS: $curso".PHP_EOL;
    }

} catch (Exception $e) {
    echo "Não foi possível listar os cursos!\n".PHP_EOL.$e->getMessage();
}
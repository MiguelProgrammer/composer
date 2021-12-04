#!/usr/bin/env php
<?php

require "vendor/autoload.php";
OlaMundo::apresentacao();

use GuzzleHttp\Client;
use MiguelP\BuscaCursos\modelo\modelo\BuscaCurso;
use Symfony\Component\DomCrawler\Crawler;

$client =  new Client(['base_uri' => 'https://www.mackenzie.br/']);
$crawler = new Crawler();

try {
    $buscaCursos = new BuscaCurso($client,$crawler);
    $pegaCursos = $buscaCursos->buscar("processos-seletivos/vestibular-graduacao/sao-paulo-higienopolis");

    foreach ($pegaCursos as $curso) {
        if(!str_contains("ATENÇÃO",$curso)) {
            OlaMundo::toString("CURSOS: $curso" . PHP_EOL);
        }
    }
} catch (Exception $e) { 
    OlaMundo::toString("Não foi possível listar os cursos! ".$e->getMessage());
}
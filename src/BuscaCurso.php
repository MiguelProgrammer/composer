<?php

namespace MiguelP\BuscaCursos;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class BuscaCurso
{

    private ClientInterface $httpClient;
    private Crawler $crawler;

    public function __construct(ClientInterface $httpClient, Crawler $crawler)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(string $url): array
    {
        $cursos = [];

        $response = $this->httpClient->request("GET",$url);
        $this->crawler->addHtmlContent($response->getBody());
        $elementos = $this->crawler->filter('h3');

        foreach ($elementos as $elemento) {
            $cursos[] = $elemento->textContent;
        }
        return $cursos;
    }
}
<?php

require 'vendor\autoload.php';

use \GuzzleHttp\Client;
use \Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request('GET', 'https://wwww.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();

$crawler = new Crawler();

// atualizar a versão do PHP
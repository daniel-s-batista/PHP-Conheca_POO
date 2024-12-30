<?php

require __DIR__ . "/app/Modelo/Titulo.php";
require __DIR__ . "/app/Modelo/Genero.php";
require __DIR__ . "/app/Modelo/Filme.php";
require __DIR__ . "/app/Modelo/Serie.php";
require __DIR__ . "/app/Calculos/calculadoraMaratona.php";
require __DIR__ . "/app/funcoes.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    "Dragon Ball Super: Broly",
    2018,
    Genero::Luta,
    100
);

var_dump($filme);

echo $filme->media() . "\n";

$serie = new Serie("Dragon Ball Daima", 2024, Genero::Luta, 1, 26, 24);

var_dump($serie);

echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);

echo "Tempo mínimo da maratona: " . $calculadora->duracao() . " minutos\n";



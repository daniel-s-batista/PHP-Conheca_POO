<?php 

require __DIR__ . "/app/funcoes.php";
require __DIR__ . "/public/Modelo/Filme.php";

echo "Bem-vindo(a) ao Screen Match!\n";
$planoPrime = true;

$filme = criaFilme(
    nome: "Dragon Ball Super: Broly",
    anoLancamento: 2018,
    nota: 7.7,
    genero: "Luta",
);

file_put_contents(__DIR__ . "/dados.json", json_encode($filme));

echo var_dump(file_get_contents(__DIR__ . "/dados.json", true));

<?php
$numeros = [10, 20, 30, 40, 50, 60, 70];

$posicao = 3;

array_splice($numeros, $posicao - 1, 1);

echo "Novo vetor:<br>";

foreach ($numeros as $numero) {
    echo $numero . " ";
}
?>
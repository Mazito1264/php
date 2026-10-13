<?php
$nomes = [];
$tempos = [];

for ($i = 0; $i < 10; $i++) {
    $nomes[$i] = readline("Nome do cavalo " . ($i + 1) . ": ");
    $tempos[$i] = (float) readline("Tempo em segundos: ");
}

$menorTempo = $tempos[0];
$vencedor = $nomes[0];

for ($i = 1; $i < 10; $i++) {
    if ($tempos[$i] < $menorTempo) {
        $menorTempo = $tempos[$i];
        $vencedor = $nomes[$i];
    }
}

echo "Vencedor: $vencedor<br>";
echo "Tempo: $menorTempo segundos";
?>
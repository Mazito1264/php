<?php
function somaDivisoresProprios($n)
{
    $soma = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($n % $i == 0) {
            $soma += $i;
        }
    }

    return $soma;
}

function numeroPerfeito($n)
{
    return $n == somaDivisoresProprios($n);
}

echo "Números perfeitos entre 1 e 3000:<br>";

for ($n = 1; $n <= 3000; $n++) {
    if (numeroPerfeito($n)) {
        echo $n . "<br>";
    }
}
?>      
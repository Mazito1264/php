<?php
function equacao2Grau($a, $b, $c)
{
    $delta = ($b * $b) - (4 * $a * $c);

    if ($a == 0) {
        echo "Não é uma equação do 2º grau.";
    } elseif ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "A equação tem duas raízes reais: x1 = $x1 e x2 = $x2";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);

        echo "A equação tem uma raiz real: x = $x";
    } else {
        echo "A equação não tem raízes reais.";
    }
}

equacao2Grau(1, -5, 6);
?>

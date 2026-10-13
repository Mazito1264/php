<?php
function trianguloFloyd($n)
{
    $numero = 1;

    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $numero . " ";
            $numero++;
        }

        echo "<br>";
    }
}

trianguloFloyd(5);
?>
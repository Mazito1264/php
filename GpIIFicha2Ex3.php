<?php
function codificarString($texto)
{
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $codigo = ord($texto[$i]);

        if ($codigo % 2 == 0) {
            $resultado .= chr($codigo + 1);
        } else {
            $resultado .= chr($codigo - 1);
        }
    }

    return $resultado;
}

echo codificarString("Mazito");
?>
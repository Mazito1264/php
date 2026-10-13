<?php
function contarOcorrencias($texto, $carater)
{
    return substr_count($texto, $carater);
}

echo contarOcorrencias("programacao", "a");
?>
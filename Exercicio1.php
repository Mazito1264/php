<?php
$x= 34;
echo $x;
if ($x==34)
     echo "<br> o valor é igual a 34"; 
else
    echo " o valor não é igual a 34"; 
function paridade ($x)
{
    if($x%2==0)
        echo "Sx é par!";

    else 
     echo "$x é impar!";
}

paridade     (300);
?>
<?php

$chave=array();
for($i=0;$i<=5;$i++)
{
    $num=rand(1,50);
if(in_array($num,$chave)==0)
     { $chave[$i]=$num; echo $num.",";}

     else
        $i--;
}

?>

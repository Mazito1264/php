<?php

$vector=array(1,-2,3,4,5,6,7);
echo "o elemento minimo e:".mim($vector);
$media=array_sum($vector)/7;
echo"<br> A media e:".$media;
$somap=0;
$soman=0;

foreach($vector as $a)
    {
        if($a>0)
            $somap=$somap+$a;

         if($a<0) 
            $soman=$soman+$a;
    }
echo "<br> Soma dos positivos:".$somap;
echo "<br> Soma dos negativos:".$somap;


?>
<?php

class Retangulo { 
private $largura;
private $altura;

public function __construct ($largura, $altura) {
$this->largura= $ largura;
$this->altura= $ altura;

}

public function calcularArea () {
return $this->largura*$this->altura;
}

public function calcularPerimitro(){
  return 2* ($this->largura+$this->altura);
}
}

//Programa principal
$retangulo = new Retangulo(10, 5); 
echo "area: " . $retangulo->calcularArea() . "<br>"; 
echo "Perimetro: " . $retangulo->calcularPerimetro();








?>
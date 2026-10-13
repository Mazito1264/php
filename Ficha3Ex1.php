<?php
class Pessoa {
private $nome;
private $idade;

public function __construct ($nome, $idade) {
    $this-> nome = $nome;
    $this-> idade = $idade;
}

public function apresentar () {
echo "Nome: ".this->nome. "<br>";
echo "Idade: ".this->idade. "anos <br>";

}


}

// Programa principal 

$pessoa1 = new pessoa ("Silvia", 23);
$pessoa2 = new pessoa ("Linda", 24);

$pessoa1->apresentar ();
echo"<br>";
$pessoa2->apresentar ();


?>


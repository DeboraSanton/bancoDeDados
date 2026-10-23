<?php
class Produto{
    public $nome;
    public $valor;
}

$produto1 = new Produto();
$produto1->valor = "2500";

$produto2 = new Produto();
$produto2->valor = "4500";

$produto3 = new Produto();
$produto3->valor = "70";

$soma = $produto1->valor + $produto2->valor + $produto3->valor;


?>
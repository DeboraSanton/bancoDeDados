<?php

class ContaBancaria{
    public $titular;
    public $saldo;
    public $pix;

    
   public function __construct($t,$s,$p)
   {
     $this->titular=$t;
     $this->saldo=$s;
     this->pix=$p;
   }

   public function depositar($p,$deposito){
    if($this->pix===$p){
        $this->saldo += $deposito;
        return "Novo saldo após depósito de $deposito: R$ $this->saldo";
    }else{
        return "Chave PIX inválida!";
    }
   }

}






?>
<?php
class Allegato {
    private $nome;
    private $tipo;
    private $dimensione;    
   
public function __construct(String $nome, String $tipo, String $dimensione) {
    $this->nome = $nome;
    $this->tipo = $tipo;
    $this->dimensione = $dimensione;
}
public function getNome(){
   return $this-> nome;
}
public function setNome($nome){
  return  $this->$nome;
}

public function getTipo(){
   return  $this->tipo;
}
public function setTipo($tipo){
  return  $this->$tipo;
}

public function getDimensione(){
  return  $this->dimensione;
}
public function setDimensione($dimensione){
  return  $this->dimensione = $dimensione;
}



}


?>
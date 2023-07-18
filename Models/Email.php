<?php

class Email extends CommunicationSystem {
   public $allegato= [];
   public $mittenteAddress;
   public $destinatarioAddress;
   private $notifica;
   public static $coloreLed = "red";
   
   public function __construct(String $mittente, String $destinatario, String $titolo, String $contenuto, 
   Bool $notifica, string $mittenteAddress, String $destinatarioAddress, $allegato){
    // eredità


    parent::__construct( $mittente, $destinatario, $titolo, $contenuto,);
    $this->notifica = $notifica;
    $this->mittenteAddress = $mittenteAddress;
    $this->destinatarioAddress = $destinatarioAddress;
    $this->allegato = $allegato;

   }
   //    get-set 
   public function getAllegato(){
    return $this->allegato;
   }
   public function setAllegato($allegato)
   {
       $this->Allegato = $allegato;
   }

  public function getnotifica(){
    return $this-> notifica;
  }
  public function setnotifica(){
    return $this-> notifica;
  }
// polimorfismo con invio in communicationsystem
public function invio(){
    return 'email inviata';
}
public function inoltro(){
    return 'inoltrata';
}
public function stampa(){
    return 'stampata';
}
}
?>



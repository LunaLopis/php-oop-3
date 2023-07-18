<?php

// definizione della classe genitore
 class CommunicationSystem {
    private $mittente;
    private $destinatario;
    private $titolo;
    private $contenuto;
    public static $coloreLed = "green";

    // creo instanza, specifico parametri da accettare e assegno valori
 public function __construct(String $mittente, String $destinatario, String $titolo, String $contenuto,){
   $this->mittente = $mittente;
   $this->destinatario = $destinatario;
   $this->titolo = $titolo;
   $this->contenuto = $contenuto;
   
 }
//  Getter e Setter 
 public function getMittente(){
    return $this-> mittente;
  }
  public function setMittente(string $mittente){
    $this->mittente = $mittente;
}
  public function getDestinatario(){
    return $this->destinatario;
}
public function setDestinatario(string $destinatario){
    $this->destinatario = $destinatario;
}

public function getTitolo(){
    return $this->titolo;
}
public function setTitolo(string $titolo){
    $this->titolo = $titolo;
}

public function getContenuto(){
    return $this->contenuto;
}
public function setContenuto(string $contenuto){
    $this->contenuto = $contenuto;
}
public static function getColoreLed(){
    return self::$coloreLed;
}

public static function setColoreLed($coloreLed){
    self::$coloreLed = $coloreLed;
}


// metodo per restituire comunicazione inviata
public function invio(){
    return 'Comunicazione inviata';
} 
}
  


 
?>
<?php
 class Messages extends CommunicationSystem{
    private $notificaLettura;
    private $accettarisposta;
    public static $coloreLed = "yellow";

    public function __construct(String $mittente, String $destinatario, String $titolo,
     String $contenuto, Bool $notificaLettura, Bool $accettarisposta){
        parent::__construct($mittente, $destinatario, $titolo, $contenuto,);
        $this->notificaLettura = $notificaLettura;
        $this->accettarisposta = $accettarisposta;
    }    
    public function getNotificaLettura(){
        return $this-> notificaLettura;
      }
      public function setNotificaLettura(){
        return $this-> notificaLettura;
      }
      public function getRisposta(){
        return $this-> accettarisposta;
      }
      public function setRisposta(){
        return $this-> accettarisposta;
      }
      public function invio(){
        return 'messaggio inviato';
      }
      public function risposta(){
        return 'ehi!';
      }

 }
?>
<?php
class NotifichePush extends CommunicationSystem {
   public $visibile;
   private $icona;
   public static $coloreLed = "blu";
   
   public function __construct(String $mittente, String $destinatario, String $titolo, String $contenuto, 
   Bool $visibile, String $icona ){
    // eredità
    parent::__construct( $mittente, $destinatario, $titolo, $contenuto,);
    $this->visibile = $visibile;
    $this->icona = $icona;

   }
   //    get-set 
   public function getVisibile(){
    return $this->visibile;
   }
   public function setVisibile($visibile)
   {
       $this->visibile = $visibile;
   }

  public function geticona(){
    return $this-> icona;
  }
  public function seticona(){
    return $this-> icona;
  }
// polimorfismo con invio in communicationsystem
public function invio(){
    return 'Notifica push inviata';
}
public function OnClick(){
    return 'apri link';
}

}
?>
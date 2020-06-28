<?php
 class Radio{
  private $channel;
  public function setChannel($channel){
   $this->channel = $channel;
  }
  public function receiveRadio(){
   echo($this->channel .  "からラジオを貰えました!\n");
  }
 }

 $radio = new Radio();
 $radio->setChannel("94.5");
 $radio->receiveRadio();
?>
<?php 
class Spettacolo {
  public $film;
  public $sala;
  public $data;
  public $orario;

  public function  __construct($_film, $_sala, $_data,  $_orario) {
    $this->film = $_film;
    $this->sala = $_sala;
    $this->data = $_data;
    $this->orario = $_orario;
  }
}



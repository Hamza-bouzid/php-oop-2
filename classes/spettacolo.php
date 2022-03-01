<?php 
class Spettacolo {
  private $film;
  private $sala;
  private $data;
  private $orario;

  public function  __construct($_film, $_sala, $_data,  $_orario) {
    $this->film = $_film;
    $this->sala = $_sala;
    $this->data = $_data;
    $this->orario = $_orario;
  }

  public function getFilm() {
    return $this->film;
  }

  public function getData() {
    return $this->data;
  }

  public function getOrario() {
    return $this->orario;
  }

  public function getInfoSpettacolo() {
    return "Titolo: {$this->film->titolo} <br>
            Sala: {$this->sala->nome}<br>
            Data: {$this->data}<br>
            Orario: {$this->orario}<br>";
  }
}



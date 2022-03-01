<?php 
class Film {
  public $titolo;
  private $genere;
  private $anno;
  private $durata;
  private $attori;

  public function  __construct($_titolo, $_genere, $_anno, $_durata, $_attori = []) {
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->anno = $_anno;
    $this->durata = $_durata;
    $this->attori = $_attori;
  }

  public function getDurata() {
    return $this->durata;
  }
}
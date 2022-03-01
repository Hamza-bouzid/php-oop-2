<?php 
class Attore{
  private $nome;
  private $cognome;
  private $dataDiNascita;


  public function  __construct($_nome, $_cognome, $_dataDiNascita) {
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->dataDiNascita = $_dataDiNascita;
  }
}



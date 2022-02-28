<?php 
class SalaNormale {
  public $nome;
  protected $posti;
  protected $dimensioneSchermo;
  protected $effeto3D;

  public function  __construct($_nome, $_posti, $_dimensioneSchermo, $_effeto3D) {
    $this->nome = $_nome;
    $this->posti = $_posti;
    $this->dimensioneSchermo = $_dimensioneSchermo;
    $this->effeto3D = $_effeto3D;
  }

}
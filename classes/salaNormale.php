<?php 
class SalaNormale {
  public $nome;
  protected $capienza;
  protected $dimensioneSchermo;
  private $effeto3D;

  public function  __construct($_nome, $_capienza, $_dimensioneSchermo, $_effeto3D) {
    $this->nome = $_nome;
    $this->capienza = $_capienza;
    $this->dimensioneSchermo = $_dimensioneSchermo;
    $this->effeto3D = $_effeto3D;
  }

  public function getCapienza() {
    return $this->capienza;
  }

  public function getInfo() {
    return "Nome: {$this->nome} <br>
            Capienza: {$this->capienza}<br>
            Schermo: {$this->dimensioneSchermo}<br>
            3D: {$this->is3D()}<br>";
  }

  public function is3D() {
    return $this->effeto3D ? 'True' : 'False';
  }

}
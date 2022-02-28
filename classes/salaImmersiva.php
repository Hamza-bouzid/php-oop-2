<?php 
require_once __DIR__.'./salaNormale.php';

class SalaImmersiva extends SalaNormale {
  private $efetti;

  public function  __construct($_nome, $_posti, $_schermo, $_effeto3D, $_efetti) {
    parent::__construct($_nome, $_posti, $_schermo, $_effeto3D);
   $this->efetti = $_efetti;
   
  }

}
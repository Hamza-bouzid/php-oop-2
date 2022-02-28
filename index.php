<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once __DIR__.'./classes/salaNormale.php';
require_once __DIR__.'./classes/salaImmersiva.php';
require_once __DIR__.'./classes/spettacolo.php';
require_once __DIR__.'./classes/film.php';

$salaNormale = new SalaNormale('slala-1', 200, '100 piedi', false);
$salaImmersiva = new SalaImmersiva('slala-4', 250, '120 piedi', true, ['vibrazione', 'fumo', 'acqua']);
$film = new Film('the batman', 'Azione', 2022, '2:58', ['attore-1', 'attore-2', 'attore-3', 'attore-4'] );
$spettacolo = new Spettacolo($film->titolo, $salaImmersiva->nome, '01/03/2022', '20:00');

var_dump($salaNormale);
var_dump($salaImmersiva);
var_dump($spettacolo);
var_dump($film);


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-2</title>
</head>
<body>
  
</body>
</html>
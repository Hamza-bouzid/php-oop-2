<?php 
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);


require_once __DIR__.'./classes/salaNormale.php';
require_once __DIR__.'./classes/salaImmersiva.php';
require_once __DIR__.'./classes/spettacolo.php';
require_once __DIR__.'./classes/film.php';
require_once __DIR__.'./classes/attore.php';

$sale = [
  new SalaNormale('sala-1', 100, '100 piedi', false),
  new SalaNormale('sala-2', 100, '105 piedi', false),
  new SalaNormale('sala-3', 140, '100 piedi', false),
  new SalaImmersiva('sala-4', 200, '110 piedi', true, ['vibrazione', 'fumo', 'acqua']),
  new SalaImmersiva('sala-5', 200, '120 piedi', true, ['vibrazione']),
];

$attori = [
  new Attore('Mario', 'Rossi', '1990/01/12'),
  new Attore('Marco', 'Verdi', '1990/01/12'),
  new Attore('Michele', 'Bianchi', '1990/01/12'),
  new Attore('Antonio', 'Neri', '1990/01/12'),
  new Attore('Davide', 'Marroni', '1990/01/12'),
];

$film = [
  new Film('the batman', 'Azione', 2022, 2.58, [$attori[1],$attori[3]] ),
  new Film('Spiderman', 'Azione', 2021, 2.58, [$attori[0],$attori[3] ]),
  new Film('Uncharted', 'Azione', 2022, 2.58, [$attori[0],$attori[1],$attori[4]] ),
  new Film('Road', 'Dramatico', 2006, 2.58, $attori),
  new Film('Matrix', 'Azione', 2000, 2.58, $attori),
];

$spettacoli = [
  new Spettacolo($film[0], $sale[4], '01/03/2022', 20.15),
  new Spettacolo($film[1], $sale[3], '03/03/2022', 18.00),
  new Spettacolo($film[0], $sale[2], '01/03/2022', 21.45),
  new Spettacolo($film[3], $sale[1], '02/03/2022', 19.00),
  new Spettacolo($film[4], $sale[0], '01/03/2022', 21.00),
  
];

//1) Recupera l’elenco delle sale con relative informazioni, facendo particolare attenzione alle informazioni aggiuntive per le sale immersive.
foreach($sale as $sala) {
  echo $sala->getInfo()."<br>";
  
  
}

//2) Recuperare la capienza totale del cinema considerando tutte le sale a disposizione.
$capienzaTot = 0;
foreach($sale as $sala) {
  $capienzaTot += $sala->getCapienza();
  
}
echo 'La capienza totale é di : '. $capienzaTot . '<br><br><br>';




//3) Stabilito un giorno e un film, recuperare quante proiezioni totali di quel film ci saranno.

foreach($spettacoli as $spettacolo) {
  if($spettacolo->getFilm() == $film[0] && $spettacolo->getData() == '01/03/2022') {
    echo $spettacolo->getInfoSpettacolo() . '<br>';
  }
}


//4) Stabilito un giorno, recupera l’orario di fine dell’ultimo spettacolo.

$dataScelta = $spettacoli[0]->getData();
$orario = 0;
$ultimo = 0;

foreach($spettacoli as $spettacolo) {
  if($spettacolo->getOrario() > $orario) {
    $orario = $spettacolo->getOrario();

  };
};



foreach($spettacoli as $spettacolo) {
  
  if($spettacolo->getOrario() == $orario) {
  $ultimo = $orario + $spettacolo->getFilm()->getDurata();

  $ultimo_orario = str_replace('.', ':', $ultimo);

  echo "l’orario di fine dell’ultimo spettacolo: " . $ultimo_orario;

  };
};









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
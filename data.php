<!-- Ricreare il nostro database dell’esercizio Basket (utilizzando solo funzioni PHP).
Questa volta lo creiamo in un file PHP incluso nel file PHP principale che
utilizzerà i dati per stamparli nell’html.

Potete inizialmente stamparli come le card uno sotto (o a fianco) all'altro e poi,
se avete tempo e voglia, potete aggiungere il click sul codice del giocatore che
mostra i dati solo del giocatore selezionato (con jQuery ovviamente) -->

<?php

function gen_player($id){
  //creo array alfabeto
  foreach (range('A', 'Z') as $letter){
    $array_alfabeto[] = $letter;
  }
  // print_r($array_alfabeto);
  //genero 3 lettere casuali
  $gen_letter = array_rand($array_alfabeto, 3);

  // print_r($array_alfabeto[$gen_letter[0]]);
  // print_r($array_alfabeto[$gen_letter[1]]);
  // print_r($array_alfabeto[$gen_letter[2]]);

  //creo array numeri
  foreach (range('1', '9') as $number){
    $array_numeri[] = $number;
  }
  // print_r($array_numeri);
  //genero 3 numeri casuali
  $gen_number = array_rand($array_numeri, 3);

  // print_r($array_numeri[$gen_number[0]]);
  // print_r($array_numeri[$gen_number[1]]);
  // print_r($array_numeri[$gen_number[2]]);

  //creo l'id univoco del giocatore
  $id_player = $array_alfabeto[$gen_letter[0]].$array_alfabeto[$gen_letter[1]].$array_alfabeto[$gen_letter[2]].$array_numeri[$gen_number[0]].$array_numeri[$gen_number[1]].$array_numeri[$gen_number[2]];

  // print_r($id_player);

  // array giocatori
  $players =[
    'id' => $id,
    'nome:' => $id_player,
    'punti_fatti:'=> rand(0, 40),
    'rinbalzi:'=> rand(0, 200),
    'falli:'=> rand(0, 5),
    'tiri_da_2_punti(%):'=> number_format(rand(0, 1000) / 10, 1),
    'tiri_da_3_punti(%):'=> number_format(rand(0, 1000) / 10, 1)
  ];

  // var_dump($players);

  return $players;
};

?>

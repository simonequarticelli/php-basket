<!-- Ricreare il nostro database dell’esercizio Basket (utilizzando solo funzioni PHP).
Questa volta lo creiamo in un file PHP incluso nel file PHP principale che
utilizzerà i dati per stamparli nell’html.

Potete inizialmente stamparli come le card uno sotto (o a fianco) all'altro e poi,
se avete tempo e voglia, potete aggiungere il click sul codice del giocatore che
mostra i dati solo del giocatore selezionato (con jQuery ovviamente) -->

<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-basket</title>
    <link rel="stylesheet" href="public/app.css">
    <script src="public/app.js" charset="utf-8"></script>
  </head>
  <body>

    <!-- DA TERMINARE  -->
    <select class="select_id_players" name="">
      <option>ID PLAYERS</option>
      <?php for ($i=1; $i < 101; $i++) {
        echo "<option value=".$i.">".gen_player($i)['nome:']."</option>";
      } ?>
    </select>

    <div class="card__container">
      <?php
      for ($i=0; $i < 10; $i++) {
        echo '<div class="card"><img src="https://as2.ftcdn.net/jpg/01/73/53/01/500_F_173530100_65sHLVn8zF1AJr8EJjP78VGl8VvYfXxb.jpg" alt="">
        <h4>id giocatore: '.gen_player($id)['nome:'].'</h4><br>';

        echo '<div class="score">
        punti fatti: '.gen_player($id)['punti_fatti:'].'<br>
        rinbalzi: '.gen_player($id)['rinbalzi:'].'<br>
        falli: '.gen_player($id)['falli:'].'<br>
        tiri da 2 punti(%): '.gen_player($id)['tiri_da_2_punti(%):'].'<br>
        tiri da 3 punti(%): '.gen_player($id)['tiri_da_3_punti(%):'].'<br></div>

        </div>';

      }?>
    </div>

  </body>
</html>

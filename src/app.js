var $ = require('jquery');

$(document).ready(function(){
  // reagisco al cambio di selezione del giocatore
  $('.select_id_players').change(function() {
  // recupero l'indice del giocatore all'interno dell'array dal value della select
  var selected_player = $(this).val();
  console.log(selected_player);
  });















});

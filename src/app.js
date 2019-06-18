var $ = require('jquery');

$(document).ready(function(){
  $('.score').hide();
  $(document).on('click', '.card', function(){
    $(this).find($('img')).fadeOut(function(){
      $(this).siblings($('.score')).fadeIn();
    });
  });
  $('.card').mouseleave(function() {
    $('.score').fadeOut(function(){
      $(this).siblings($('img')).fadeIn();
    });
  });

  // DA TERMINARE
  // reagisco al cambio di selezione del giocatore
  $('.select_id_players').change(function() {
  // recupero l'indice del giocatore all'interno dell'array dal value della select
  var selected_player = $(this).val();
  console.log(selected_player);
  });


});

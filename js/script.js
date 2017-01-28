$(document).ready(function() {
  if($(window).width()>786){
    $('#navbar').show();
  }
  if($(window).width()<786){
    $('#navbar').hide();
    $('.close').hide();
  $('.button').click(function(){
    $('#navbar').toggle('slow');
    $('.open').toggle('slow');
    $('.close').toggle('slow');
  });
}
});

$(document).ready(function(){
  $('.overlay>.text2').hide();
  $('.menuPage').hide();
  $('.right, .left').click(function(){
    $(this).find('.overlay>h1').slideToggle();
    $(this).find('.overlay>.text2').slideToggle();
    /*$('.right, .left').click(function(){
      $(this).find('.overlay>h1').slideDown(500);
      $(this).find('.overlay>.text2').slideUp(500);
    });*/
  });
  $('.menu').click(function(){
    $('.menuPage').slideDown();
  });
  $('.menuPage').click(function(){
    $('.menuPage').slideUp();
  });
});

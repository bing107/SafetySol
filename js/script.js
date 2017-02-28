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

$(window).scroll( function(){

    /* Check the location of each desired element */
    $('#types, .box, #banner2').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight()/2;
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $(this).animate({'opacity':'1'},800);

        }

    });

});
});

(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.carousel').carousel();
    $('.carousel.carousel-slider').carousel(
      {
        fullWidth: true,
        indicators: true,
        dist: 0,
        duration:100
      }
    );
    autoplay();
    function autoplay(){
      $('.carousel').carousel('next');
      setTimeout(autoplay, 5200);
    }
  }); // end of document ready
})(jQuery); // end of jQuery name space

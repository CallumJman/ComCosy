
(function($){
      
  $(window).load(function() {

   $('.page-loading').delay(1000).fadeOut(1000);

    //Smooooooth(scroller)
    $('.scroll').click(function(event){
      event.preventDefault();
      $('html, body').stop().animate({
          scrollTop: $( $(this).attr('href')  ).offset().top-60
      }, 1500);
      return false;
    });

    $('.image-scroller').slick({
      slidesToShow: 4
    });


    //Single Product tabbed content
    $('.tab-header').click(function(){
      var targetTab = $(this).data('tab');
      //Clean tab headers
      $('.tab-header').each(function(){
        $(this).removeClass('active');
      })
      //Assign new active
      $(this).addClass('active');

      //Clean content boxes
      $('.tab-content').each(function(){
        $(this).removeClass('active');
      })
      //Assign active content
      $('.tab-content.' + targetTab).addClass('active')
    })


    $('.gallery').ionZoom();



  }); //$(window).load END



  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
  function SVGsupport() {
    return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
  }

})(jQuery);

jQuery(document).ready(function($){

	// sub menu
  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
    // hide all sub menus
    $(this).find('.dropdown-menu .dropdown-menu').stop(true, true);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  });

  // sub of sub menu
  $('ul.dropdown-menu li.dropdown-submenu').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  });

  // Image Carousel

  $(document).ready(function(){
    $('#imageCarousel').carousel();
  });

  //Scroll to Top
   $(window).scroll(function(){
    if($(this).scrollTop()>300){
      $('.scrolltoup').fadeIn();
    }
    else
    {
      $('.scrolltoup').fadeOut();
    }
   });   
   //Down to Up   
   $('.scrolltoup').click(function(){   
    $("html, body").animate({
    scrollTop:0},500)
   });
    // Smooth scrolling 
    $('a.scrollto').on('click', function(e){
          //store hash
          var target = this.hash;    
          e.preventDefault();
      $('body').scrollTo(target, 800, {offset: -80, 'axis':'y'});
      
    });
    

   // FAQ Plus and Minus toggle
    $('.card-header h5').click(function(){
        $(this).find('.fa-plus').toggle();
        $(this).find('.fa-minus').toggle();
    });
    
   // sideber contact form
    var x=0;
    $(".quote_form_button").click(function(){
      if(x==0){
        $(".quote_form").animate({"right":0},600)
        x=1;
        return false;
      }

      if(x==1){
        $(".quote_form").animate({"right":"-300px"},600)
          x=0;
      }
    });
    // tooltip hover
    $('[data-toggle="tooltip"]').tooltip(); 


});
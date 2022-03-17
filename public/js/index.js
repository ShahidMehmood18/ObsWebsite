 //   ===========BACK TO TOP====================//
 $(document).ready(function(){
  $(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 150) {
      $('#back2Top').fadeIn();
  } else {
      $('#back2Top').fadeOut();
     
  }
});
})

//   ===========BACK TO TOP====================//

// =================Loader========================
$(window).on('load',function() {
  setTimeout(function(){
    $('.preloader').fadeOut();
  },2000)
});

$(document).ready(function(){
  $('#box-area').mousemove(function(e){
      var x = -(e.pageX + this.offsetLeft) / 20;
      var y = -(e.pageY + this.offsetTop) / 20;
      $(this).css('background-position', x + 'px ' + y + 'px');
  });    
});

    
  
  $(".carousel").owlCarousel({
    margin: 0,
    loop: true,
    center: true,
    autoplay: true,
    nav: true,
    dots: false,
    smartSpeed: 1000,
    autoplayTimeout:3000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:1,
        nav: true
      },
      600:{
        items:1,
        nav: true
      },
      1000:{
        items:3,
        nav: true
      }
    }
  });
  $(".carouselmember").owlCarousel({
    items:4,
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    dotsEach: 5,
    autoplay: true,
    smartSpeed: 2500 ,
    slideTransition: 'linear',
    autoplayTimeout: 6000,
    autoplaySpeed: 6000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:2,
      },
      600:{
        items:2,
      },
      1000:{
        items:4,
       
      }
    }
  });


  $('.clients-carousel').owlCarousel({
    items: 3,
    margin: 0,
    loop: true,
    autoplay: true,
    center: true,
    nav:false,
    dots: true,
    dotsEach: 4,
    smartSpeed: 1000,
    autoplayTimeout:3000,
    autoplayHoverPause: true,
    responsive: {
      0:{
        items:1,
      },
      600:{
        items:2,
      },
      1000:{
        items:3,
      }
    }
     });

 


  
// =================HAMBURGER=====================//
$(document).ready (function (){
  $(".navbar-toggler").on("click", function (){
      $("body").addClass("mobileMenu-active");
    //   $('.navbar-collapse').addClass('show');
      $('.navbar-toggler').fadeOut();
      $('.navbar-toggler2').addClass('show');
       $('.navbar-toggler2').fadeIn();
      $(".overlaynav").addClass("open");
      $(".scroller").addClass("overflownone");
      
  });
  $(".navbar-toggler2").on("click", function (){
      $("body").removeClass("mobileMenu-active");
      $('.navbar-collapse').addClass('collapsing');
      $('.navbar-toggler2').removeClass('show');
      $('.navbar-toggler2').fadeOut();
      $('.navbar-toggler').fadeIn();
      $(".overlaynav").removeClass("open");
      $(".scroller").removeClass("overflownone");
      
  });
 
});
// =================HAMBURGER=====================//

// ===================Welcome popup ======================
$(document).ready( function() {
  setTimeout(function(){  $('#popup_box').fadeOut("slow"); }, 3000);
    // When site loaded, load the Popupbox First
    loadPopupBox();

    $('#popupBoxClose').click( function() {            
        unloadPopupBox();
    });

    $('#container').click( function() {
        unloadPopupBox();
    });

    function unloadPopupBox() {    // TO Unload the Popupbox
        $('#popup_box').fadeOut("slow");
        $("#container").css({ // this is just for style        
            "opacity": "1"  
        }); 
    }    

    function loadPopupBox() {    // To Load the Popupbox
        $('#popup_box').fadeIn("slow");
        $("#container").css({ // this is just for style
            "opacity": "1"  
        });         
    }        
});

  

jQuery(function($){
	$("div.resumenTerminos").hide();
	$("div.resumenAviso").hide();
	
	$("p.aviso").click(function(){
		if($("div.resumenAviso").is(":visible"))
		{
			$( "p.aviso" ).removeClass( "active" );
			$("div.resumenAviso").hide(1000);
		    $("div.resumenTerminos").hide(1000);
		}
		else
		{
			$("p.aviso").addClass("active");
			$( "p.terminos" ).removeClass( "active" );
			$("div.resumenAviso").show(1000);
		    $("div.resumenTerminos").hide(1000);
		   	$('html,body').animate({scrollTop: $("div.resumenAviso").offset().top},'slow');
		}
	});
	$("p.terminos").click(function(){
		if($("div.resumenTerminos").is(":visible"))
		{
			$( "p.terminos" ).removeClass( "active" );
			
			$("div.resumenAviso").hide(1000);
		    $("div.resumenTerminos").hide(500);
		}
		else
		{
			$("p.terminos").addClass("active");
			$( "p.aviso" ).removeClass( "active" );
			$("div.resumenTerminos").show(1000);
		    $("div.resumenAviso").hide(1000);
		    $('html,body').animate({scrollTop: $("div.resumenTerminos").offset().top},'slow');
		}

	});
});

//Funcion para scroll
(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 100
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 50
        }
    })

})(jQuery); // End of use strict

;(function($) {

$.fn.letterDrop = function() {
  // Chainability
  return this.each( function() { 
  
  var obj = $( this );
  
  var drop = {
    arr : obj.text().split( '' ),
    
    range : {
      min : 1,
      max : 9
    },
    
    styles : function() {
      var dropDelays = '\n', addCSS;
      
       for ( i = this.range.min; i <= this.range.max; i++ ) {
         dropDelays += '.ld' + i + ' { animation-delay: 1.' + i + 's; }\n';  
       }
      
        addCSS = $( '<style>' + dropDelays + '</style>' );
        $( 'head' ).append( addCSS );
    },
    
    main : function() {
      var dp = 0;
      obj.text( '' );
      
      $.each( this.arr, function( index, value ) {

        dp = dp.randomInt( drop.range.min, drop.range.max );
        
        if ( value === ' ' )
          value = '&nbsp';
        
          obj.append( '<span class="letterDrop ld' + dp + '">' + value + '</span>' );
        
      });
          
    }
  };
   
  Number.prototype.randomInt = function ( min, max ) {
    return Math.floor( Math.random() * ( max - min + 1 ) + min );
  };
  
  
  // Create styles
  drop.styles();


    // Initialise
    drop.main();
  });

};

}(jQuery));


//Cambio de Imago
jQuery(function($){

$(window).scroll(function () {
    if ($(document).scrollTop() == 0 && $(this).width() > 500) {
        $('#imago01').removeAttr('src');
        $('#imago01').attr("src","images/imagotipo/imago_blanco-01.png");

        $('#imago02').removeAttr('src');
        $('#imago02').attr("src","images/imagotipo/imago_blanco-02.png");

        $('#imago03').removeAttr('src');
        $('#imago03').attr("src","images/imagotipo/imago_blanco-03.png");
    }
    else
    {
      $('#imago01').removeAttr('src');
      $('#imago01').attr("src","images/imagotipo/imago_color-01.png");

      $('#imago02').removeAttr('src');
      $('#imago02').attr("src","images/imagotipo/imago_color-02.png");

      $('#imago03').removeAttr('src');
      $('#imago03').attr("src","images/imagotipo/imago_color-03.png");
    }
}); 


if ($( "#mainNav" ).hasClass( "affix-top" ) && $(this).width() < 500) {
      $('#imago01').removeAttr('src');
      $('#imago01').attr("src","images/imagotipo/imago_color-01.png");

      $('#imago02').removeAttr('src');
      $('#imago02').attr("src","images/imagotipo/imago_color-02.png");

      $('#imago03').removeAttr('src');
      $('#imago03').attr("src","images/imagotipo/imago_color-03.png");
}

});

jQuery(function($){
  $('.panel-collapse').on('shown.bs.collapse', function(e) {
    var $panel = $(this).closest('.panel');
    $('html,body').animate({
      scrollTop: $panel.offset().top
    }, 500);
  });
});
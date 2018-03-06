
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

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  //.not('[href="#"]')
  //.not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
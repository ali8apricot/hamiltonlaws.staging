var jQuery = $;

// banner atf height function
function atfHeight(){
	var winHeight = $( window ).height();
	var headerHeight = $( ".main-header" ).height();
	var totaltopHeight = winHeight - headerHeight;
	$( ".main-atf" ).height( totaltopHeight - 88 );
}

$( document ).ready(function(){
	atfHeight();
	// header scroll function
	$( window ).on("scroll", function() {
		if($( window ).scrollTop() > 110 ) {
			$( ".main-header" ).addClass( "header-fix" );
		} else {
			//remove the background property so it comes transparent again (defined in your css)
		   $( ".main-header" ).removeClass( "header-fix" );
		}
	});

	// opening menu function on menu icon click
	$( ".main-header .menu-icon" ).click(function(){
		if($( ".mobile-nav" ).hasClass( "toggleMenu" )){
			$( ".mobile-nav" ).removeClass( "toggleMenu" );
		}else {
			$( ".mobile-nav" ).addClass( "toggleMenu" );
		}
	});

	// closing menu function on cross icon 
	$( ".mobile-nav .close-nav" ).click(function(){	
		$( ".mobile-nav" ).removeClass( "toggleMenu" );
	});

	// mobile smart nav function
	$( ".fix-nav ul li.smart-nav-icon" ).click(function(){
		if($( ".mobile-nav" ).hasClass( "mobile-toggleMenu" )){
			$( this ).removeClass( "mobile-toggleMenu" );
		}else {
			$( this ).addClass( "mobile-toggleMenu" );
		}
	});

	// sub-nav function
	$(".mobile-nav ul li").click(function (e) {
		e.stopPropagation();
		$(this).toggleClass("change-icon");
		$(this).children('ul').toggle();		 	
	});

	$(".main-header ul.primary-nav li").click(function (e) {
		e.stopPropagation();
		$(this).toggleClass("change-icon");
		$(this).children('ul').toggle();		 	
	});

	// adding class to submenu having child element
    $('.mobile-nav ul li').each(function(){
        var hasNestedItems = $(this).find('li').length;
        if(hasNestedItems > 0){
            $(this).addClass('parent');
        }
    });

	// closing nav byclicking outside nav 
	$(document).mouseup(function (e) {
	     var popup = $(".mobile-nav");
	     if (!$('.fix-nav ul li.smart-nav-icon a').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
	        if ($(window).width() < 767) {
	            $( "body" ).css( "overflow", "scroll");
	        }
	         popup.removeClass( "mobile-toggleMenu" );
	     }

	     var popup2 = $(".mobile-nav");
	     if (!$('.main-header .header .nav-icon img').is(e.target) && !popup2.is(e.target) && popup2.has(e.target).length == 0) {
	        if ($(window).width() < 767) {
	            $( "body" ).css( "overflow", "scroll");
	        }
	         popup2.removeClass( "toggleMenu" );
	     }

	 });

	// case review image animation on page ready
	$(".cta-bottom").animate({right: "0"}, {
    	duration: 1000       
    });

    // adding span to main nav
    var practice_area =	jQuery('.main-header ul.primary-nav .practice-areas ul.sub-menu li').size()
    jQuery('.main-header ul.primary-nav li.practice-areas a').append('<span>'+practice_area+'</span>');
    jQuery('.main-header ul.primary-nav li:nth-child(5) a').append('<span>20</span>');

	// desktop atf slide reviews and results fadeIn/fadeOut
	(function() {
	    var quotes = $(".slide-one");
	    var quoteIndex = -1;	    
	    function showNextQuote() {
	        ++quoteIndex;
	        quotes.eq(quoteIndex % quotes.length)
	            .fadeIn(2000)
	            .delay(2000)
	            .fadeOut(2000, showNextQuote);
	    }	    
	    showNextQuote();
	})();

	
	// mobile smart nav function
	$( ".fix-nav ul li.smart-nav-icon" ).click(function(){
		$( ".mobile-nav" ).toggleClass( "mobile-toggleMenu" );
	});

	$( ".mobile-nav .nav-close-icon" ).click(function(){
		$( ".mobile-nav" ).removeClass( "mobile-toggleMenu" );
	});
	// mobile smart nav ends
	
	// pixel slider initilization start 
   	/*var sliderElem = $(".main-particle-slider");
	sliderElem.each(function(index, elem){
		new ParticleSlider({sliderId: jQuery(elem).attr('id') })
	});
	var ps1 = new ParticleSlider({
	 	//sliderId: 'particle-slider-1'
	});*/

	// home page carousel slier
	

});


$( window ).load(function() {
  
});

// resize function
$(window).resize(function(){
    atfHeight();
});
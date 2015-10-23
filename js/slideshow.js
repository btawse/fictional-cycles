(function($) {

	var darkblue = '#213067';
	var lightblue = '#afb8da';
	
	var index = 1;
	var slides;
	var slidebuttons;
	var timeout;
	var delay = 4500;

	$.fn.slideshow = function() {
	
		slides = this.children();
		
		if(slides[0]) {
			slides[0].style.display = 'list-item';
			if(slides.length > 1) {
				slidebuttons = $('#slidebuttons').children();

				$('#slidebuttons').children().each(function() {
					$(this).click(function() {
						$.changeSlide($('#slidebuttons li').index(this));
					});
				});
		
				slidebuttons[0].style.backgroundColor = darkblue;
				timeout = setTimeout('$.continueSlideshow()', delay);
			}
		}
		
		return this;
		
	};
	
	$.continueSlideshow = function() {
	
		$(slides).each(function() {
			if($(this).css('display') == 'list-item') {
				$(this).fadeOut();
				slidebuttons[$('#slideshow li').index(this)].style.backgroundColor = lightblue;	
				
			}
		});
	
		if(index > slides.length-1)
			index = 0;
			
		$(slides[index]).fadeIn();
		
		slidebuttons[index].style.backgroundColor = darkblue;
		if(slides[index].style.removeAttribute)
			slides[index].style.removeAttribute('filter');
		index++;
		
		timeout = setTimeout('$.continueSlideshow()', delay);
		
	};
	
	$.changeSlide = function(clickedslide) {
		clearTimeout(timeout);
		index = clickedslide;
		$.continueSlideshow();
	};
	
})(jQuery);

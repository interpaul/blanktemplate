(function($){

	$(document).ready(function() {

		var config = $('body').data('config') || {};
		
		// Accordion menu
		/*$('.menu-sidebar').accordionMenu({ mode:'slide' });*/

		// Dropdown menu
		/*$('#menu').dropdownMenu({ mode: 'slide', dropdownSelector: 'div.dropdown'});*/

		// SMOOTHSCROLLER
        // add selectors to scroll smoothly to anchors
		/* $('a[href="#top"]').smoothScroller({ duration: 500 });*/

		// Social buttons
		/*$('article[data-permalink]').socialButtons(config);*/

	});

/*	
    // example of responsive.js
    $.onMediaQuery('(min-width: 960px)', {
		init: function() {
			if (!this.supported) this.matches = true;
		},
		valid: function() {
            // usage: 
            // $.matchHeight('id', '.names-of-blocks-to-compare', '.apply-to-element').match();
            
			//$.matchWidth('grid-block', '.grid-block .grid-h', '.grid-h').match();
			$.matchHeight('grid-block-2', '.grid-block .grid-h', '.mod-box').match();
		},
		invalid: function() {
			//$.matchWidth('grid-block').remove();
			$.matchHeight('grid-block-2').remove();
		}
	});
*/
})(jQuery);
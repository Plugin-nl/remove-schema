(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */


	 	 $(function() {
	 	 	// tabs
	 		var $tabBoxes = $('.remove-schema-metaboxes'),
	 		       $tabLinkActive,
	 		       $currentTab,
	 		       $currentTabLink,
	 		       $tabContent,
	 		       $hash;

	 		// Tabs on load
	 	 	if(window.location.hash){
	 	 		$hash = window.location.hash;
	 	 		$tabBoxes.addClass('hidden');
	 			$currentTab = $($hash).toggleClass('hidden');
	 			$('.nav-tab').removeClass('nav-tab-active');
	 			$('.nav-tab[href='+$hash+']').addClass('nav-tab-active');
	 	 	}
	 	 	//Tabs on click
	 	 	$('.nav-tab-wrapper').on('click', 'a', function(e){
	 			e.preventDefault();
	 			$tabContent = $(this).attr('href');
	 			$('.nav-tab').removeClass('nav-tab-active');
	 			$tabBoxes.addClass('hidden');
	 			$currentTab = $($tabContent).toggleClass('hidden');
	 			$(this).addClass('nav-tab-active');
	 			 if(history.pushState) {
	 				history.pushState(null, null, $tabContent);
	 			}
	 			else {
	 				location.hash = $tabContent;
	 			}
	 		})

	 	});

})( jQuery );

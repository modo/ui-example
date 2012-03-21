// Import bootstrap scripts
// @codekit-prepend '../bootstrap/js/scripts.js'

// Site-specific scripts
// @codekit-prepend 'docnav.js'

// Initializations 
$(document).ready(function(){
	$('.collapse').collapse();
	$('.dropdown-toggle').dropdown();
	$('.alert').alert()
	
	$('#sub-section-nav').subnav();
	$('select:not([multiple])').each(fixSelect);	
	$('.block-link').each(blockLink);
	docNav();
	$('.account-setting').each(accountSetting);
	$('.fluid-media').fitVids();
});
// Import bootstrap scripts
// @codekit-prepend '../bootstrap/js/scripts.js'

// USGBC.org-specific functions
// ---------------------------------------------



// Initializations 
// ---------------------------------------------
$(document).ready(function(){
	$('.collapse').collapse();
	$('.dropdown-toggle').dropdown()
	$('#sub-section-nav').subnav();
	$('select:not([multiple])').each(fixSelect);
	$('.account-setting').each(accountSetting);
});
// Import bootstrap scripts
// @codekit-prepend '../bootstrap/js/scripts.js'

// USGBC.org-specific functions
// ---------------------------------------------



// Initializations 
// ---------------------------------------------
$(document).ready(function(){
	$('.collapse').collapse();
	$('.dropdown-toggle').dropdown();
	$('#sub-section-nav').subnav();
	$('select:not([multiple])').each(fixSelect);	
	docNav();
	$('.account-setting').each(accountSetting);
});



// Site-specific Scripts
// ---------------------------------------------

function docNav(){
	var content = [];
	var nav = $('#sub-section-nav ul');
	var animationTime = 500;
	
	// Populate array of sections w/ relevant info
	$('h1.section-header').each(function(){
		var num = $(this).closest('section').index();
		
		content[num] = {};
		content[num].section = $(this).closest('section');
		content[num].title = $(this).text();
	});
	
	// Append the nav item
	for(i = 0; i < content.length; i++){
		var class = content[i].title.replace(' ', '-').toLowerCase();
		var navItem = $('<li class="' + class + '"><a href="#' + i + '">' + content[i].title + '</a></li>');
		nav.append(navItem);
	}
	
	// 
	$('a', nav).click(function(e){
		e.preventDefault();
		$('.active', nav).removeClass('active');
		$(this).closest('li').addClass('active');
		
		// If 'all' link has been clicked
		if($(this).closest('li').index() == 0){
			console.log('show all');
			for(i = 0; i < content.length; i++){
				content[i].section.fadeIn(animationTime);
			}
		} else if($(this).closest('li').index() != 0){
			var num = $(this).attr('href');
			num = num.replace('#', '');
			num = parseInt(num);
			
			$('#mainCol > section:visible').hide();
			content[num].section.fadeIn(animationTime);
			window.location.hash = content[num].title.replace(' ', '-').toLowerCase();
		}
	});
	if(window.location.hash){
		var a = window.location.hash.replace('#', '');
		$('.filter-nav li.'+a+' a').click();
	}
	
	$('a[rel="internal"]').click(function(){
		var a = $(this).attr('href').replace('#', '');
		$('.filter-nav li.'+a+' a').click();
	});
}
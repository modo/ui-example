function docNav(){
	var content = [];
	var nav = $('#sub-section-nav ul');
	var animationTime = 500;
	
	// Populate array of sections w/ relevant info
	$('article#mainCol > section').each(function(){
		var num = $(this).index();
		
		content[num] = {};
		content[num].section = $(this);
		content[num].title = $('> h1.section-header', this).text();
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
			
			var hashtag = content[num].title;
			
			hashtag = hashtag.replace(/ /g, '-');
			hashtag = hashtag.replace(/&/g, 'and');
			
			window.location.hash = hashtag.toLowerCase();
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
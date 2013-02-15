$(document).ready(function(){

	// Facebook likes and social feed
	
	var url = "http://graph.facebook.com/118471574857255?callback=?";
	$.getJSON(url,function(json){
		var fbImage = 'http://graph.facebook.com/118471574857255/picture';
		
		$('.social-feed h3').after('<a href="http://www.facebook.com/pages/Clare-Housing/118471574857255"><img src="'+fbImage+'" /></a>');
 	});


	// --------- Submenus in left navigation ------ //

	var children = $('.leftnav').find('li ul.children');
	
	if ( children.closest('li').hasClass('current_page_item') ) { 
		
	} else {
		children.hide();
	};
	
	
	
	// --------- Fitvids ---------- //
	
	$('article').fitVids();
	
	
	// -------- Home page callout rotators ------ //
	
	$('#rotators strong:first').css('display','block');

    var rotate = function()
    {
        setTimeout(function(){
			$('#rotators strong:first').fadeIn(800, function(){
				$(this).detach().appendTo('#rotators').delay(3500).fadeOut(800);
			});
			rotate();
		}, 5500);
    };
    rotate();
	
	
	// --------- Residents and Donor/Volunteers ------ //
	
	var resident = $('#resident'),
		residents = $('.resident'),
		donor = $('#donor-volunteer'),
		donors = $('.donor-volunteer');
	
	var i=1;
	var j=1;
	resident.find('a').append(' +').click(function(e){
		i++;
		e.preventDefault();
		residents.slideToggle('slow');
		if (i%2 == 0) {
			var text = $(this).text(),
				newText = text.substr(0, text.length-2)+' -';
			$(this).text(newText);	
		} else {
			var text = $(this).text(),
				newText = text.substr(0, text.length-2)+' +';
			$(this).text(newText);
		}
	});
	donor.find('a').append(' +').click(function(e){
		j++;
		e.preventDefault();
		donors.slideToggle('slow');
		if (j%2 == 0) {
			var text = $(this).text(),
				newText = text.substr(0, text.length-2)+' -';
			$(this).text(newText);	
		} else {
			var text = $(this).text(),
				newText = text.substr(0, text.length-2)+' +';
			$(this).text(newText);
		}
	});

	// ------- Clarion Newsletter ----------- //
	
	var coverImageWrapper = $('.page-template-page-clarion-newsletter-php .page p');
	
	coverImageWrapper.each(function(){
		$(this).next('ul').andSelf().wrapAll('<div class="third" />');
	});
	
	// ---------- Footer Menu -------------- //
	
	var footerMenu = $('#menu-footer-menu');
	footerMenu.find('li:not(:last-child)').append(' |');
	footerMenu.find('li:not(:first-child)').prepend('&nbsp;');


});
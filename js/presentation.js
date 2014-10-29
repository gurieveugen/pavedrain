$(document).ready(function() {                
	
	
	
	/*email protect*/
	$("span.mailto").each(function(){
		exp = $(this).text().search(/\((.*?)\)/) != -1 ? new RegExp(/(.*?) \((.*?)\)/) : new RegExp(/.*/);
		match = exp.exec($(this).text());
		addr = match[1] ? match[1].replace(/ at /,"@").replace(/ dot /g,".") : match[0].replace(/ at /,"@").replace(/ dot /g,".");
		link = match[2] ? match[2] : addr;
		subject = $(this).attr('title') ? "?subject="+$(this).attr('title').replace(/ /g,"%20") : "";
		$(this).after('<a href="mailto:'+addr+subject+'">'+ link + '</a>');
		$(this).remove();
	});    



	// Open links in new window when rel="external" is applyed to a tag
	$('a[rel="external"]').click(function(){
		this.target = "_blank";
	});

	$('#navigation ul li').hover(function() {
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});

	$('#images').cycle({
		
		fx: 'fade',
		prev: '#previous-button',
		next: '#next-button',
		speed: '500',
		timeout: '4000'	
	});

	
	
});
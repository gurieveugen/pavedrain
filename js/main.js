jQuery(document).ready(function(){
	// ==============================================================
	// Remove field notification
	// ==============================================================
	jQuery('.wpcf7-form-control-wrap').mouseenter(function(){
		if(jQuery(this).find('span.wpcf7-not-valid-tip').length)
		{
			jQuery(this).find('span.wpcf7-not-valid-tip').fadeOut(200);
		}
	});
});
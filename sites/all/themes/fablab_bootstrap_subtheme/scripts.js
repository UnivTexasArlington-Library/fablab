jQuery(document).ready(function() {
	var winheight = jQuery(window).height();
	jQuery(".right").css("height", winheight);
	jQuery(".left").css("height", winheight);
	jQuery(window).resize(function() {
		var winheight = jQuery(window).height();
		jQuery(".right").css("height", winheight);
		jQuery(".left").css("height", winheight);
	});
});
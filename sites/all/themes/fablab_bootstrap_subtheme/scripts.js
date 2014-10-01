jQuery(document).ready(function() {
	var winheight = jQuery(window).height();
	jQuery(".main").css("min-height", winheight - 220);
	jQuery(".left").css("min-height", winheight);
	jQuery(window).resize(function() {
		var winheight = jQuery(window).height();
		jQuery(".main").css("min-height", winheight - 220);
		jQuery(".left").css("min-height", winheight);
	});
});
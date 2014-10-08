jQuery(document).ready(function() {
	var winheight = jQuery(window).height();
	jQuery(".main").css("height", winheight - 275);
	jQuery(".left").css("height", winheight);
	jQuery(window).resize(function() {
		var winheight = jQuery(window).height();
		jQuery(".main").css("height", winheight - 275);
		jQuery(".left").css("height", winheight);
	});
	jQuery(".logo:first").mouseenter(function() {
		jQuery(".logo").toggle();
	});
	jQuery(".logo:nth-of-type(2)").mouseleave(function() {
		jQuery(".logo").toggle();
	});
});
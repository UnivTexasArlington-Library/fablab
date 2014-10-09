jQuery(document).ready(function() {
	var winheight = jQuery(window).height();
<<<<<<< HEAD
	jQuery(".main").css("min-height", winheight - 222);
	jQuery(".left").css("min-height", winheight);
	jQuery(window).resize(function() {
		var winheight = jQuery(window).height();
		jQuery(".main").css("min-height", winheight - 222);
		jQuery(".left").css("min-height", winheight);
=======
	jQuery(".main").css("height", winheight - 275);
	jQuery(".left").css("height", winheight);
	jQuery(window).resize(function() {
		var winheight = jQuery(window).height();
		jQuery(".main").css("height", winheight - 275);
		jQuery(".left").css("height", winheight);
>>>>>>> 18c9c2c70cf245dff79a05396f2bce7edb393b45
	});
	jQuery(".logo:first").mouseenter(function() {
		jQuery(".logo").toggle();
	});
	jQuery(".logo:nth-of-type(2)").mouseleave(function() {
		jQuery(".logo").toggle();
	});
});
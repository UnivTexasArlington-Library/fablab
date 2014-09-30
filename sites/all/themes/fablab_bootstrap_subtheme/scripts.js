$(document).ready(function() {
	var winheight = window.height();
	$(".right").css("height", winheight);
	$(".left").css("height", winheight);
	$(window).resize(function() {
		var winheight = window.height();
		$(".right").css("height", winheight);
		$(".left").css("height", winheight);
	});
});
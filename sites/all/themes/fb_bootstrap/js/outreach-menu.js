jQuery(document).ready(function($) {
	
	//add class to remove padding
	$("aside ul li a").on("click", function(e) {
		alert(this);
		$(this).addClass("remove-border");
		$(this).addClass("remove-padding-bottom");	
		
	});
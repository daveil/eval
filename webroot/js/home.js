$(document).ready(function(){
	$('.actions a.dropdown-toggle').click(function(e){
		e.preventDefault();
		var target = $(this).attr('href');
		$(target).toggleClass('active');
	});
});
$(document).ready(function(){
	$('.hambaga').on('click', function(){
		$(this).toggleClass('active');
		$('.nav-list').slideToggle().addClass('active');
		$('.sctn-hdr').toggleClass('active');
	});
});
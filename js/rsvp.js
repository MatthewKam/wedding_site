$(document).ready(function(){
	$('#frm').submit(function() {
		$.post("rsvp-process.php", $(this).serialize(), function(data) {
			$('#thanks').show();
		    if (data == 'no_guest'){
		        $('#guest-again').show();
		        $('.ping-pong').hide();
		        $('#guest-who').hide();
		        $('#thanks').hide();

		    } else {
		        $('#guest-who').show();
		        $('.ping-pong').hide();
		        $('#guest-again').hide();
		        $('#thanks').hide();
		    }

		});
	  	return false;
	});


	$('#has-guest').on('click', function(){
		$('#guest').slideToggle();
	});
	$('.close-modal').on('click', function(){
		$('.thankyou-wrp').fadeOut();
	});
});

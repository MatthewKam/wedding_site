$(document).ready(function(){

	$('#frm-guest').submit(function() {

		$.post("rsvp-submit.php?step=1", $(this).serialize(), function(data) {

		    if ( data == 'thanks' ){
		    	$('#thanks').show();
		        $('.ping-pong, #guest-again').hide();

		    } else if ( data == 'guest_input' ){
				$('#frm-guest').hide();
		        $('#frm-has-guest, .ping-pong').show();
		        $('#guest-again, #thanks, .thankyou-wrp').hide();
		        
		    } else {
		    	$('#guest-again').show();
		        $('.ping-pong, #thanks').hide();
		    }

		});
	  	return false;

	});

	$('#frm-has-guest').submit(function() {
		var rsvp = $(this).serialize() + '&' + $('#frm-guest').serialize();
		$.post("rsvp-submit.php?step=2", rsvp, function(data) {
			$('#thanks').show();
		    $('.ping-pong, #guest-again').hide();
		});
	  	return false;

	});

	$('.solo').on('click', function(){
		var guestName = $('#guest-first-last');
		$(guestName).slideToggle();
		($(this).is(':checked')) 
		? $(guestName).find('input').attr('data-validation','') 
		: $(guestName).find('input').attr('data-validation','required');
	});

	$('.close-modal').on('click', function(){
		$('.thankyou-wrp').fadeOut();
	});
});

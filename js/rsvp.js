$(document).ready(function(){
	$('#frm').submit(function() {
		$.post("rsvp-process.php", $(this).serialize(), function(data) {
		    if (data == 'no_guest'){
		        alert('You are not allowed a guest');
		    } else {
		        alert(data);
		    }
		});
	  	return false;
	});
});
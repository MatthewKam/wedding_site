$(document).ready(function(){
	$('#bg-carousel').slick({
		dots: true,
	  	infinite: true,
	  	slidesToShow: 1,
	  	slidesToScroll: 1
	});


});

$(document).scroll(function() {

    var y = $(this).scrollTop();
    var sec1 = $('.sctn-1').offset().top + 30;
    var sec2 = $('.sctn-2').offset().top;
    var header = $('.sctn-hdr');


    ( y > sec1 ) ? header.addClass('stuck') : header.removeClass('stuck');

    ( y > sec2 ) ? header.addClass('still') : header.removeClass('still');
});
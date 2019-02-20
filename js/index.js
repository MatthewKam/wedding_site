$(document).ready(function(){
	$('#bg-carousel').slick({
		dots: true,
	  	infinite: true,
	  	slidesToShow: 1,
	  	slidesToScroll: 1
	});

	$('a[href^="./#"]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
            && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
                || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                    .animate({scrollTop: targetOffset}, 1000);
                return false;
            }
        }
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
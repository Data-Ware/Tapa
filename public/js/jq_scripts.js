$(document).ready(function() {

    $('#slideshow').cycle({

		fx: 'fade',

		speed: 2500

		

	});

});

$(function() {
	var zIndexNumber = 1000;
	$('#vtab').each(function() {
		$(this).css('zIndex', zIndexNumber);
		zIndexNumber -= 10;
	});
});


    $(function() {
        $('#gallery a').lightBox();
    });


$(function() {
    var $items = $('#vtab>ul>li>a');
    $items.click(function() {
    $items.removeClass('selected');
    $(this).addClass('selected');
            
    var index = $items.index($(this));
    $('#vtab>div').hide().eq(index).show();
    }).eq(0).click();
});




jQuery(function ($) {
        $(".button-collapse").sideNav();

	$('select').material_select();

        $('.stacked-images').each(function () {
		var $images = $(this).find('img');
		var animateClass = 'animated bounceInLeft';
		var i = 0;
        	setInterval(function () {
			var j = (i + 1) % $images.length;
			$images.not(':eq(' + i + ')').css('visibility', 'hidden').removeClass(animateClass);
			$images.eq(i).css('z-index', '1');
			$images.eq(j).css('z-index', '100').css('visibility', 'visible').addClass(animateClass);
			i = j;
		}, 2500);
	});

	
	$('.open-materialboxed').click(function () {
		$($(this).data('target')).click();
	});

});

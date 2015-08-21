jQuery(function ($) {
        $(".button-collapse").sideNav();

        $('.stacked-images').each(function () {
		var $images = $(this).find('img');
		var animateClass = 'animated bounceInDown';
		var i = 0;
        	setInterval(function () {
			var j = (i + 1) % $images.length;
			$images.not(':eq(' + i + ')').css('visibility', 'hidden').removeClass(animateClass);
			$images.eq(i).css('z-index', '1');
			$images.eq(j).css('z-index', '1000').css('visibility', 'visible').addClass(animateClass);
			i = j;
		}, 2500);
	});
});

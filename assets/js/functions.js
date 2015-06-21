var console = console || {
    "log": function(stuff) {}
};

;(function($) {
	var $window = $(window),
		wHeight = $window.outerHeight(),
		$root = $("html, body"),
		$body = $("body"),
		$header = $('header'),
		$jumpIcon = $('.jump span');
		
	console.log("Hi there =)");
	
	$body.on("click", ".jump", function(e) {
		var $this = $(this),
			y = $($this.attr("href")).offset().top;
		
		$root.animate({scrollTop: y}, 300);
		
		e.preventDefault();
	});

	$window.on('scroll', rotateJumpIcon);
	rotateJumpIcon();

	function rotateJumpIcon() {
		var deg = 0 + $window.scrollTop() / wHeight * 360,
			deg = (deg > 180 ? 180 : Math.round(deg));
		
		$jumpIcon.css({transform: 'rotate(' + deg + 'deg)'});
	}
	
})(window.jQuery);
var console = console || {
    "log": function(stuff) {}
};

;(function($) {
	var $window = $(window),
		$root = $("html, body"),
		$body = $("body"),
		$header = $('header');
		
	console.log("Hi there =)");
	
	$body.on("click", ".jump", function(e) {
		var $this = $(this),
			y = $($this.attr("href")).offset().top;
		
		$root.animate({scrollTop: y}, 300);
		
		e.preventDefault();
	});
	
	$window.bind('scroll', function() {
		$header.css('top', - $window.scrollTop());
	});
	
})(window.jQuery);
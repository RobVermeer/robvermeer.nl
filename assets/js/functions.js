;(function($) {
	var $root = $("html, body"),
		$body = $("body");
	
	$body.on("click", ".jump", function(e) {
		var $this = $(this),
			y = $($this.attr("href")).offset().top;
		
		$root.animate({scrollTop: y}, 300);
		
		e.preventDefault();
	});

})(window.jQuery);
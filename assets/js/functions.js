var console = console || {
    "log": function(stuff) {}
};

;(function($) {
	var $root = $("html, body"),
		$body = $("body");
		
	console.log("Hi there =)");
	
	$body.on("click", ".jump", function(e) {
		var $this = $(this),
			y = $($this.attr("href")).offset().top;
		
		$root.animate({scrollTop: y}, 300);
		
		e.preventDefault();
	});

})(window.jQuery);
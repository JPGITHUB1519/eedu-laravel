define(['jquery', 'bootstrap'], function($) {
	// $("html").text("Hola");
	function flashMessage(){
		$("#flash-alert").fadeTo(2000, 500).slideUp(500, function () {
    		$("#flash-alert").slideUp(500);
    	});
	}
	return {
		flashMessage: flashMessage
	}
});
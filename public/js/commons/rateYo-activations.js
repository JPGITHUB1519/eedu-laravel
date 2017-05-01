define(['jquery', 'rateyo'], function($) {
	function showRating(arg)
	{
		$("#rateYo").rateYo({
			rating : arg ,
			readOnly: true 
		});
	}

	return {
		showRating: showRating
	}
});
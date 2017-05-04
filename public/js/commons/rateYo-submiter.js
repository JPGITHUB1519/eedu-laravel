define(['jquery', 'rateyo'], function($) {
	$("#rater").rateYo({

	});

	$("#form").submit(function() {
			$("#rating").val($("#rater").rateYo("option", "rating"));
	});
});
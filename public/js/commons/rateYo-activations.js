define(['jquery', 'rateyo'], function($) {
	/**
	* Initialite a rateYo Component 
	* @param {string} rater_id -> ID of the rate div to initialite
	*/
	function initializeRater(rater_id)
	{
		$("#" + rater_id).rateYo({

		});
	}

	/**
	* Initialite a rateYoComponent with a default rating 
	* @param {string} rater_id -> ID of the rateYo widget
	* @param {float} rating_value -> Initiliaze rate value for the widget
	*/
	function initializeRaterWithDefaultRating(rater_id, rating_value)
	{
		$("#" + rater_id).rateYo({
			rating : rating_value
		});
	}

	/**
	* Show the RateYo Twitget
	* @param {float} rating_value -> Value of the rating to show
	*/
	function showRating(rating_value)
	{
		$("#rateYo").rateYo({
			rating : rating_value ,
			readOnly: true 
		});
	}

	/**
	* Fill a hidden rating input value before a form submitions
	* @param {string} form_id -> ID of the form to submit
	* @param {string} rater_id -> ID of the rateYo-Element
	* @param {string} rating_hidden_input_id -> ID of the hidden input to fill before submit form
	*/
	function submitRating(form_id, rater_id, rating_hidden_input_id)
	{
		$("#" + form_id).submit(function() {
			$("#" + rating_hidden_input_id).val($("#" + rater_id).rateYo("option", "rating"));
		});
	}

	return {
		showRating: showRating,
		submitRating: submitRating,
		initializeRater: initializeRater,
		initializeRaterWithDefaultRating: initializeRaterWithDefaultRating
	}
});
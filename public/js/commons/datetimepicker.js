define(["jquery", "jquery_ui"], function($) {
	/**
		* Initialize a datepicker widget from a dom_id
		* @param {string} date_id -> dom_id input text id to initialize the component 
	*/
	function initializeDatePicker(date_id)
	{
		$("#" + date_id).datepicker({dateFormat: 'yy-mm-dd'});
	}
	return {
		initializeDatePicker: initializeDatePicker,
	}
});
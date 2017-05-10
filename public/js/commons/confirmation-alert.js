define(["bootbox"], function(bootbox) {
	// delete-confirmation
	/**
		* Confirmation Propmt to submit form if yes
		* @param {string} -> form to submit
	*/
	function deleteConfirmation(form_id)
	{
		bootbox.confirm({
			message: "Are you sure you want to delete?",
			buttons: {
				confirm: {
					label: 'yes',
					className: 'btn-success' 
				},
				cancel: {
					label: 'no',
					className: 'btn-danger' 
				}
			},
			callback: function(result) {
				if(result)
				{
					$("#" + form_id).submit();
				}
			}
		});
	}

	return {
		deleteConfirmation: deleteConfirmation
	}
});
/*
	The first file to be loaded
*/

requirejs.config({
	// base url path
	baseUrl: '/js',
	paths: {
		jquery: "libs/jquery-3.2.1.min",
		jquery_ui: "https://code.jquery.com/ui/1.12.1/jquery-ui",
		rateyo: "https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min",
		bootstrap: "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min"
	},
	// dependencys
	shim: {
		// will load jquery before rateYo
		rateyo: {
			deps: ["jquery"]
		},

		bootstrap: {
			deps: ["jquery"]
		},
		jquery_ui: {
			deps: ["jquery"]
		}
	}
});


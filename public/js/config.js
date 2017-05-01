/*
	The first file to be loaded
*/

requirejs.config({
	// base url path
	baseUrl: '/js',
	paths: {
		jquery: "libs/jquery-3.2.1.min",
		rateyo: "https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min"
	},
	// dependencys
	shim: {
		// will load jquery before rateYo
		rateyo: {
			deps: ["jquery"]
		}
	}
});


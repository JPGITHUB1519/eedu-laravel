<script type="text/javascript">
	require(["config"], function() {
		require(["commons/rateYo-activations"], function(rateyo) {
			rateyo.initializeRaterWithDefaultRating("rater", {{ $model->rating }});
			rateyo.submitRating("form", "rater", "rating");
		});
	});
</script>
@section('custom_script')
	<script type="text/javascript">
		require(["config"], function() {
			require(["commons/rateYo-activations"], function(rateyo) {
				rateyo.initializeRater("rater");
				rateyo.submitRating("form", "rater", "rating");
			});
		});
	</script>
@endsection
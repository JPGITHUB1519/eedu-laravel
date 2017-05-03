<!-- flash message -->
@if($flash = session('message'))
    <div class="alert alert-success alert-dismissable flash-message" role="alert" id="flash-alert">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ $flash }}
    </div>
@endif

<script type="text/javascript">
	require(["config"], function() {
		require(["commons/flash-alert"], function(obj) {
			obj.flashMessage();
		});
	});
</script>
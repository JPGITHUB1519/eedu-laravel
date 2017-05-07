@extends('layouts.admin.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Create Leader</h3>
				</div>
				<form role="form" action="/admin/leaders" method="POST" id="form">
					{{csrf_field()}}
					<input type="hidden" name="rating" id="rating"> 
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" name="lastname" class="form-control">
						</div>
						<div class="form-group">
							<label>Birthdate</label>
							<input type="text" name="date" id="date" class="form-control">
						</div>
						<div class="form-group">
							<label class="radio-inline"><input type="radio" name="optradiosexo" value="m">M</label>
							<label class="radio-inline"><input type="radio" name="optradiosexo" value="f">F</label>
						</div>
						<div class="form-group">
							<label>Profession</label>
							<input type="text" name="profession" class="form-control">
						</div>
						<div class="form-group">
							<label>Position</label>
							<input type="text" name="position" class="form-control">
						</div>
						<div class="form-group">
							<label>Nationality</label>
							<input type="text" name="nationality" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Rating</label>
							<div id="rater">
							</div>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="is_active">is_active?</label>
						</div>
						<div class="form-group">
							<label>Image URL</label>
							<input type="text" name="image_url" class="form-control">
						</div>
						<input type="submit" class="btn btn-primary">
					</div>
				</form>
				@include('layouts.errors')
			</div>
		</div>
	</div>
@endsection

@section("custom_script")
	<script type="text/javascript">
		require(["config"], function() {
			require(["commons/datetimepicker"], function(datepicker) {
				datepicker.initializeDatePicker("date");			
			});
		});
	</script>
@endsection
@include("rateyo-submiter");
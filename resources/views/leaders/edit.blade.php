@extends('layouts.admin.master')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit leader</h3>
				</div>
				<form role="form" action="/admin/leaders/{{ $leader->id }}" method="POST" id="form">
					{{ method_field("PUT") }}
					{{ csrf_field() }}
					<input type="hidden" name="rating" id="rating"> 
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" value="{{ $leader->name }}">
						</div>
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" name="lastname" class="form-control" value="{{ $leader->lastname }}">
						</div>
						<div class="form-group">
							<label>Birthdate</label>
							<input type="text" name="birthdate" id="date" class="form-control" value="{{ $leader->birthdate }}">
						</div>
						<div class="form-group">
							@if($leader->sex == "m")
								<label class="radio-inline"><input type="radio" name="sexo" value="m" checked="checked">M</label>
								<label class="radio-inline"><input type="radio" name="sexo" value="f">F</label>
							@else
								<label class="radio-inline"><input type="radio" name="sexo" value="m">M</label>
								<label class="radio-inline"><input type="radio" name="sexo" value="f" checked="checked">F</label>
							@endif
						</div>
						<div class="form-group">
							<label>Profession</label>
							<input type="text" name="profession" class="form-control" value="{{ $leader->profession }}">
						</div>
						<div class="form-group">
							<label>Position</label>
							<input type="text" name="position" class="form-control" value="{{ $leader->position }}">
						</div>
						<div class="form-group">
							<label>Nationality</label>
							<input type="text" name="nationality" class="form-control" value="{{ $leader->nationality }}">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" value="{{ $leader->email }}">
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control">{{ $leader->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Rating</label>
							<div id="rater">
							</div>
						</div>
						<div class="checkbox">
							@if($leader->is_active)
								<label><input type="checkbox" name="is_active" checked>is_active?</label>
							@else
								<label><input type="checkbox" name="is_active">is_active?</label>
							@endif
						</div>
						<div class="form-group">
							<label>Image URL</label>
							<input type="text" name="image_url" class="form-control" value="{{ $leader->image_url }}">
						</div>
						<input type="submit" class="btn btn-primary">
					</div>
				</form>
				@include('layouts.errors')
			</div>
		</div>
	</div>
@endsection

@section('custom_script')
	<script type="text/javascript">
		require(["config"], function() {
		require(["commons/rateYo-activations", "commons/datetimepicker"], function(rateyo, datetimepicker) {
			rateyo.initializeRaterWithDefaultRating("rater", {{ $leader->rating }});
			rateyo.submitRating("form", "rater", "rating");
			datepicker.initializeDatePicker("date");
		});
	});
	</script>
@endsection
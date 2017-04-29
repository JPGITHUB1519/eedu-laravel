@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Course</h3>
				</div>
				<form role="form" action="/admin/courses/{{ $course->id }}" method="POST" id="form">
					{{ method_field("PUT") }}
					{{ csrf_field() }}
					<input type="hidden" name="rating" id="rating"> 
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" value="{{ $course->name }}">
						</div>
						<div class="form-group">
							<label>Slogan</label>
							<textarea name="slogan" class="form-control">{{ $course->slogan }}</textarea>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control">{{ $course->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Skill Level</label>
							<select class="form-control" name="skill_level">
								@if($course->skill_level == "beginner")
									<option value="beginner" selected>Beginner</option>
								@else
									<option value="beginner">Beginner</option>
								@endif

								@if($course->skill_level == "intermediate")
									<option value="intermediate" selected>Intermediate</option>
								@else
									<option value="intermediate">Intermediate</option>
								@endif

								@if($course->skill_level == "advanced")
									<option value="advanced" selected>Advanced</option>
								@else
									<option value="advanced">Advanced</option>
								@endif
							</select>
						</div>
						<div class="form-group">
							<label>Cost</label>
							<input type="text" name="cost" class="form-control" value={{ $course->cost }}>
						</div>
						<div class="checkbox">
							@if($course->is_active)
								<label><input type="checkbox" name="is_active" checked>is_active?</label>
							@else
								<label><input type="checkbox" name="is_active">is_active?</label>
							@endif
						</div>
						<div class="form-group">
							<label>Rating</label>
							<div id="rater">
							</div>
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
		$("#rater").rateYo({
			// load rating from database
			rating : {{ $course->rating }},
		});

		$("#form").submit(function() {
			$("#rating").val($("#rater").rateYo("option", "rating"));
		});
	</script>
@endsection
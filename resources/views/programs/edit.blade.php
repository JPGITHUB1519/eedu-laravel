@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Program</h3>
				</div>
				<form role="form" action="/admin/programs/{{ $program->id }}" method="POST" id="program-form">
					{{ method_field("PUT") }}
					{{ csrf_field() }}
					<input type="hidden" name="rating" id="program_rating"> 
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" value="{{ $program->name }}">
						</div>
						<div class="form-group">
							<label>Slogan</label>
							<textarea name="slogan" class="form-control">{{ $program->slogan }}</textarea>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control">{{ $program->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Cost</label>
							<input type="text" name="cost" class="form-control" value={{ $program->cost }}>
						</div>

						<div class="checkbox">
							@if($program->has_plus)
								<label><input type="checkbox" name="has_plus" checked>Has Plus?</label>
							@else
								<label><input type="checkbox" name="has_plus">Has Plus?</label>
							@endif
						</div>
						<div class="checkbox">
							@if($program->is_active)
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
			rating : {{ $program->rating }},
		});

		$("#program-form").submit(function() {
			$("#program_rating").val($("#rater").rateYo("option", "rating"));
		});
	</script>
@endsection
@extends('layouts.admin.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Create Course</h3>
				</div>
				<form role="form" action="/admin/courses" method="POST" id="form">
					{{csrf_field()}}
					<input type="hidden" name="rating" id="rating"> 
					<div class="box-body">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							<label>Slogan</label>
							<textarea name="slogan" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea name="description" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>Skill Level</label>
							<select class="form-control" name="skill_level">
								<option value="beginner">Beginner</option>
								<option value="intermediate">Intermediate</option>
								<option value="advanced">Advanced</option>
							</select>
						</div>
						<div class="form-group">
							<label>Cost</label>
							<input type="text" name="cost" class="form-control">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="is_active">is_active?</label>
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

@include("layouts.rateyo-submiter");
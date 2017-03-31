@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Create Program</h3>
				</div>
				<form role="form" action="/admin/programs" method="POST">
					{{csrf_field()}}
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
							<label>Cost</label>
							<input type="text" name="cost" class="form-control">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="has_plus">Has Plus?</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" name="is_active">is_active?</label>
						</div>
						<input type="submit" class="btn btn-primary">
					</div>
				</form>
			</form>
		</div>
	</div>
@endsection
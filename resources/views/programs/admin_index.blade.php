@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="row">
			<h1>Programs List <button class="btn btn-success">New</button></h1>
			
			@include('programs.search')
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hover">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Slogan</th>
						<th>Description</th>
						<th>Cost</th>
					</thead>
					@foreach($programs as $program)
						<tr>
							<td>{{ $program->id }}</td>
							<td>{{ $program->name }}</td>
							<td>{{ $program->slogan }}</td>
							<td>{{ $program->description }}</td>
							<td>{{ $program->cost }}</td>
							<td>
								<a href=""><button class="btn btn-info">Edit</button></a>
							</td>
							<td>
								<a href=""><button class="btn btn-danger">Delete</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection
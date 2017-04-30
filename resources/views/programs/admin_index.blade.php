@extends('layouts.admin.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Programs List <a href="/admin/programs/create"><button class="btn btn-success">New</button></a></h1>
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
								<a href="/admin/programs/{{ $program->id }}/edit"><button class="btn btn-info">Edit</button></a>
							</td>
							<td>
								<form action="/admin/programs/{{ $program->id }}" method="POST">
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button class="btn btn-danger">Delete</button>
								</form>
							</td>
						</tr>
					@endforeach
				</table>
				<div class="text-center">
					{{ $programs->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection
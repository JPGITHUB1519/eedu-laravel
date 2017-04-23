@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Courses List <a href="/admin/courses/create"><button class="btn btn-success">New</button></a></h1>
		</div>
		<div class="table-responsive">
			<thead>
				<thead>Id</thead>
				<thead>Name</thead>
				<thead>Description</thead>
			</thead>
			@foreach($courses as $course)
				<tr>
					<td>1{{ $course->id }}</td>
					<td>1{{ $course->name }}</td>
					<td>1{{ $course->description }}</td>
					<td>
						<a href="/admin/courses{{ $course->id }}/edit"><button class="btn btn-info">Edit</button></a>
					</td>
					<td>
						<form action="/admin/courses/{{ $course->id }}" method="POST">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>
			@endforeach
		</div>
	</div>
@endsection
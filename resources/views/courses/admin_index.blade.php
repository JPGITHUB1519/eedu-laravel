@extends('layouts.admin')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Courses List <a href="/admin/courses/create"><button class="btn btn-success">New</button></a></h1>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hover">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Slogan</th>
					</thead>
					@foreach($courses as $course)
						<tr>
							<td>{{ $course->id }}</td>
							<td>{{ $course->name }}</td>
							<td>{{ $course->slogan }}</td>
							<td>{{ $course->description }}</td>
							<td>
								<a href="/admin/courses/{{ $course->id }}/edit"><button class="btn btn-info">Edit</button></a>
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
				</table>
			</div>
		</div>
	</div>
@endsection
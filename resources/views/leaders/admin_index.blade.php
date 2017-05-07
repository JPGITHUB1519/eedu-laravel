@extends('layouts.admin.master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h1>Leaders List <a href="/admin/leaders/create"><button class="btn btn-success">New</button></a></h1>
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condesed table-hover">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Lastname</th>
						<th>Birthdate</th>
						<th>Sex</th>
						<th>Profession</th>
					</thead>
					@foreach($leaders as $leader)
						<tr>
							<td>{{ $leader->id }}</td>
							<td>{{ $leader->name }}</td>
							<td>{{ $leader->lastname }}</td>
							<td>{{ $leader->birthdate }}</td>
							<td>{{ $leader->sex }}</td>
							<td>{{ $leader->profession }}</td>
							<td>
								<a href="/admin/leaders/{{ $leader->id }}/edit"><button class="btn btn-info">Edit</button></a>
							</td>
							<td>
								<form action="/admin/leaders/{{ $leader->id }}" method="POST">
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
		{{-- <div class="text-center">
			{{ $leaders->links() }}
		</div> --}}
	</div>
@endsection
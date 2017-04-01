@extends('layouts.master')

@section('title') {{ $program-> name }} @endsection
@section('content')
    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="http://placehold.it/700x400" alt="">
            </a>
            <h3>
                <a href="#">{{ $program->name }}</a>
            </h3>
            <p>{{ $program->description }}</p>
        </div>
    </div>
    <!-- /.row -->
@endsection
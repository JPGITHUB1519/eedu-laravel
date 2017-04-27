@extends('layouts.master')

@section('title') {{ $program-> name }} @endsection
@section('content')
    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Nanodegree Program</h3>
            <h1 class="page-header text-center">{{ $program->name }}</h1>
            <h3 class="text-center">{{ $program->slogan }}</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="rateYo" style="margin : 0 auto;"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Portfolio Item Row -->
    <div class="row">
        <div class="col-md-6">
            <p>{{ $program->description }}</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
        </div>
    </div>
    <!-- /.row -->

    <!-- Related Courses -->
    <div class="row">

        <div class="col-lg-12">
            <h3 class="page-header">Featured Courses</h3>
        </div>

        @if(count($program->courses))
            @foreach($program->courses as $course)
                <div class="col-sm-4 col-xs-6">
                    <a href="/courses/{{ $course->id }}" class="text-center">
                        <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                        <p>{{ $course->name }}</p>
                    </a>
                    <p class="text-center">{{ $course->description }}</p>
                </div>

            @endforeach
        @endif
    </div>
    <!-- /.row -->  
@endsection

@section('custom_script')
    <script type="text/javascript">
        $("#rateYo").rateYo({
            rating : {{ $program->rating }},
            readOnly : true 
        });
    </script>
@endsection
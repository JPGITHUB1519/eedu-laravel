@extends('layouts.main.master')

@section('title') {{ $course-> name }} @endsection
@section('content')
    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="text-center">Course</h3>
            <h1 class="page-header text-center">{{ $course->name }}</h1>
            <h3 class="text-center">{{ $course->slogan }}</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="rateYo" style="margin : 0 auto;"></div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <hr>
    <div class="row">
        <div class="col-md-6">
            <p>{{ $course->description }}</p>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://placehold.it/750x500" alt="">
        </div>
    </div>
    <!-- /.row -->

    <!-- lessons -->
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">What Will You learn?</h2>
        </div>
    </div>
    <div class="row" style="margin : 10px; padding: 10px;">
        @foreach($course->getLessonsOrdered()->get() as $lesson)
            <div class="col-md-4">
                <h3>Lesson {{ $lesson->lesson_number }}</h3>
                <a href="">{{ $lesson->name }}</a>
                <!-- Lesson Detail -->
                <ul>
                    @foreach($lesson->getLessonsDetailsOrdered()->get() as $lesson_detail)
                        <li>{{ $lesson_detail->description }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endsection

@section('custom_script')
    <script type="text/javascript">
        $("#rateYo").rateYo({
            rating : {{ $course->rating }},
            readOnly : true 
        });
    </script>
@endsection
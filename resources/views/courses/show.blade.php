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
    <!-- Related Leaders -->
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">Courses Leaders</h3>
            <div class="row">
                @foreach($course->leaders as $leader)
                    <div class="col-xs-4">
                        <p class="text-center text-bold">{{ $leader->name }}</p>
                        <img src="{{ $leader->image_url }}" class="img-circle img-little center-block">
                        <p class="text-center little-padding-top">{{ $leader->profession }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('custom_script')
    <script type="text/javascript">
        // $("#rateYo").rateYo({
        //     rating : {{ $course->rating }},
        //     readOnly : true 
        // });
        
        // loading the scripts for this page
        require(['config'], function() {
            require(["commons/rateYo-activations"], function(obj) {
                obj.showRating({{ $course->rating }});
            });
        });
    </script>
@endsection
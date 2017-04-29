<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lesson;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));

    }
    public function admin_index()
    {
        $courses = Course::all();
        return view('courses.admin_index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
                'name' => 'required',
                'slogan' => 'required',
                'description' => 'required',
                'skill_level' => 'required',
                'cost' => 'required',
            ]);
        $course = new Course;
        $course->name = request('name');
        $course->slogan = request('slogan');
        $course->description = request('description');
        $course->cost = request('cost');
        $course->skill_level = request('skill_level');
        $course->is_active = request('is_active') ? True : False;
        $course->rating = request('rating');
        $course->save();
        return redirect('/admin/courses');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $lessons = Lesson::orderBy('lesson_number', 'ASC')->get();
        return view('courses.show', compact('course', 'lessons'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->name = request('name');
        $course->slogan = request('slogan');
        $course->description = request('description');
        $course->cost = request('cost');
        $course->skill_level = request('skill_level');
        $course->is_active = request('is_active') ? True : False;
        $course->rating = request('rating');
        $course->update();
        return redirect('/admin/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('/admin/courses');
    }
}

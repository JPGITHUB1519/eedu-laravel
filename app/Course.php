<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	public $table = "courses";

    // The Programs that the course belongs
    public function programs()
    {
    	return $this->belongsToMany('App\Program', 'programs_vs_courses');
    }

    /**
    	* Get the Lessons of the course
    */
    public function lessons()
    {
    	return $this->hasMany('App\Lesson');
    }

    /**
    	* Get the Lessons of the course ordered by lesson_number
    */
    public function getLessonsOrdered()
    {
    	return $this->lessons()->OrderBy('lesson_number', 'ASC');
    }
}

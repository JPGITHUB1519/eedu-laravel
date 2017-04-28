<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
    	* Get the Details for a lesson
    */
    public function lessons_details()
    {
    	return $this->hasMany('App\Lessons_Details');
    }

    /**
    	* Get the Details for a lesson ordered by Order Number
    */
    public function getLessonsDetailsOrdered()
    {
    	return $this->lessons_details()->OrderBy('order_number', 'ASC');
    }

    /**
    	* Get the Course of the lesson
    */
    public function course()
    {
    	return $this->belongsTo('App\Course');
    }
}

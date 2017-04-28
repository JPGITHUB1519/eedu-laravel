<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessons_Details extends Model
{
    public $table = 'lessons_details';

    /**
		* Get the Lesson that owns the lesson detail
    */
    public function lesson()
    {
    	return $this->belongsTo('App\Lesson');
    }
}

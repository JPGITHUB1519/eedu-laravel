<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	public $table = "programs";
    // The Programs that the course belongs
    public function programs()
    {
    	return $this->belongsToMany('App\Program', 'programs_vs_courses');
    }
}

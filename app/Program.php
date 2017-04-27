<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
	public $table = "programs";
    // The courses of the programs
    public function courses()
    {
    	// params @model, @table
    	return $this->belongsToMany('App\Course', 'programs_vs_courses');
    }
}

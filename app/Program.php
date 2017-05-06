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

    // the leaders of the programs
    public function leaders()
    {
    	return $this->belongsToMany('App\Leader', 'programs_vs_leaders');
    }
}

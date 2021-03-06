<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
	// the programs the leaders belong
    public function programs()
    {
    	return $this->belongsToMany('App\Program', 'programs_vs_leaders');
    }

    /**
		* The courses the leader belong
    */
	public function courses()
	{
		return $this->belongsToMany('App\Course', 'courses_vs_leaders');
	}
}

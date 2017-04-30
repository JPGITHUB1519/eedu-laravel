<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
    	return view('landing_index');
    }

    public function test()
    {
    	return view('programs');
    }
}

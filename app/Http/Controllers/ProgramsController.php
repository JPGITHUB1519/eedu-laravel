<?php

namespace App\Http\Controllers;
use App\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('programs.index', ["programs" => $programs]);
    }

    public function admin_index()
    {
        $programs = Program::all();
        return view('programs.admin_index', ["programs" => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate program
        $this->validate(request(), [
                'name' => 'required',
                'slogan' => 'required',
                'description' => 'required',
                'cost' => 'required'
            ]);
        $program = new Program;
        $program->name = request('name');
        $program->slogan = request('slogan');
        $program->description = request('description');
        $program->cost = request('cost');
        $program->has_plus = request('has_plus');
        $program->is_active = request('is_active');
        $program->save();
        return redirect('/programs');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('programs.show', compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

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
        // // session()->flash("message", "hola");
        return view('programs.index', ["programs" => $programs]);
        //return Program::all();
    }

    public function admin_index()
    {
        $programs = Program::paginate(2);
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
        $program->has_plus = request('has_plus') ? True : False;
        $program->is_active = request('is_active') ? True : False;
        $program->rating = request('rating');
        $program->save();
        session()->flash("message", "Program Saved Correctly");
        return redirect('/admin/programs');

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
    public function edit(Program $program)
    {
        return view('programs.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $program->name = request('name');
        $program->slogan = request('slogan');
        $program->description = request('description');
        $program->cost = request('cost');
        $program->has_plus = request('has_plus') ? True : False;
        $program->is_active = request('is_active') ? True : False;
        $program->rating = request('rating');
        $program->update();
        session()->flash("message", "Program Saved Correctly");
        return redirect('/admin/programs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        session()->flash("message", "Program deleted Correctly");
        return redirect('/admin/programs');
    }
}

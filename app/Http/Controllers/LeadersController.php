<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leader;

class LeadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function admin_index()
    {
        $leaders = Leader::all();
        return view('leaders.admin_index', compact('leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leaders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
                "name" => "required",
                "lastname" => "required",
                "position" => "required",
                "email" => "required",
                "description" => "required"
        ]);
        $leader = new Leader;
        $leader->name = request("name");
        $leader->lastname = request('lastname');
        $leader->birthdate = request('birthdate');
        $leader->sex = request('sexo');
        $leader->profession = request('profession');
        $leader->position = request('position');
        $leader->nationality = request('nationality');
        $leader->email = request('email');
        $leader->description = request('description');
        $leader->rating = request('rating');
        $leader->is_active = request('is_active') ? True : False;
        $leader->image_url = request('image_url');
        $leader->save();
        session()->flash("message", "Leader Saved Correctly");
        return redirect('/admin/leaders');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Leader $leader)
    {
        return view('leaders.edit', compact('leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leader $leader)
    {
        $leader->name = request("name");
        $leader->lastname = request('lastname');
        $leader->birthdate = request('birthdate');
        $leader->sex = request('sexo');
        $leader->profession = request('profession');
        $leader->position = request('position');
        $leader->nationality = request('nationality');
        $leader->email = request('email');
        $leader->description = request('description');
        $leader->rating = request('rating');
        $leader->is_active = request('is_active') ? True : False;
        $leader->image_url = request('image_url');
        $leader->save();
        session()->flash("message", "Leader Saved Correctly");
        return redirect('/admin/leaders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leader $leader)
    {
        $leader->delete();
        session()->flash("message", "Leader deleted Correctly");
        return redirect('/admin/leaders');
    }
}

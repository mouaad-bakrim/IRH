<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;

class AbsenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absence = Absence::orderBy('id','desc')->paginate(5);
        return view('absence.index', compact('absence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('absence.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'StartDate' => 'required',
            'EndDate' => 'required',
            'AbsenceStatus' => 'required',
        ]);

        Absence::create($request->post());

        return redirect()->route('absence.index')->with('success','absence has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function show(Absence $Absence)
    {
        return view('absence.show',compact('Absence'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function edit(Absence $Absence)
    {
        return view('absence.edit',compact('Absence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absence $Absence)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        $Absence->fill($request->post())->save();

        return redirect()->route('absence.index')->with('success','absence Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absence  $Absence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absence $Absence)
    {
        $Absence->delete();
        return redirect()->route('absence.index')->with('success', 'absence has been deleted successfully');
    }
}

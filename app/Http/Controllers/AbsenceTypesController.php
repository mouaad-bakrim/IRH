<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AbsenceType;

class AbsenceTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $absenceTypes = AbsenceType::all();
        return view('AbsenceTypes.index', compact('absenceTypes','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('AbsenceType.index',compact('users'));
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
            'AbsenceReason' => 'required',
            'RequiresDocument' => 'required',
            'Description' => 'required',

        ]);

        AbsenceType::create($request->all());


        return redirect()->route('AbsenceType.index')->with('success','AbsenceType has been created successfully.');
    }





}

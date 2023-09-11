<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SalaryAdvanceRequests;

class SalaryAdvanceRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $SalaryAdvanceRequests = SalaryAdvanceRequests::all();
        return view('SalaryAdvanceRequests.index', compact('SalaryAdvanceRequests','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('SalaryAdvanceRequests.index',compact('users'));
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
            'RequestAmount' => 'required',
            'RequestDate' => 'required',
            'ActionDate' => 'required',
            'Status' => 'required',

        ]);
        $ActionDate = date('Y-m-d', strtotime($request->input('ActionDate')));
        $RequestDate = date('Y-m-d', strtotime($request->input('RequestDate')));

        $user_id = auth()->user()->id; // Obtenez l'ID de l'utilisateur connecté

        $data = [
            'Status' => $request->input('Status'),
            'RequestAmount' =>  $request->input('RequestAmount'),
            'RequestDate' => $RequestDate,
            'ActionDate' => $ActionDate,
            'user_id' => $user_id,
        ];


        SalaryAdvanceRequests::create($data);



        return redirect()->route('SalaryAdvanceRequests.index')->with('success','SalaryAdvanceRequests has been created successfully.');
    }





}

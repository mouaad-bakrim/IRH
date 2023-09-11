<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\AuditLog;

class AuditLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $AuditLog = AuditLog::all();
        return view('AuditLog.index', compact('AuditLog','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('AuditLog.index',compact('users'));
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
            'ActionType' => 'required',
            'EntityAffected' => 'required',
            'ActionDescription' => 'required',
            'Date' => 'required',

        ]);
        $Date = date('Y-m-d', strtotime($request->input('Date')));

        $user_id = auth()->user()->id; // Obtenez l'ID de l'utilisateur connecté

        $data = [
            'ActionType' => $request->input('ActionType'),
            'EntityAffected' =>  $request->input('EntityAffected'),
            'ActionDescription' => $request->input('ActionDescription'),
            'Date' => $Date,
            'user_id' => $user_id,
        ];


        AuditLog::create($data);



        return redirect()->route('AuditLog.index')->with('success','AuditLog has been created successfully.');
    }





}

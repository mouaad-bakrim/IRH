<?php

namespace App\Http\Controllers;

use App\Models\EmployeeTrainings;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeTrainingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $EmployeeTraining = EmployeeTrainings::all();
        return view('EmployeeTrainings.index', compact('EmployeeTraining','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('EmployeeTrainings.index',compact('users'));
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
            'TrainingName' => 'required',
            'EndDate' => 'required',
            'StartDate' => 'required',

        ]);
        $EndDate = date('Y-m-d', strtotime($request->input('EndDate')));
        $StartDate = date('Y-m-d', strtotime($request->input('StartDate')));

        $user_id = auth()->user()->id; // Obtenez l'ID de l'utilisateur connecté

        $data = [
            'TrainingName' => $request->input('TrainingName'),
            'StartDate' => $StartDate,
            'EndDate' => $EndDate,
            'user_id' => $user_id,
        ];


        EmployeeTrainings::create($data);



        return redirect()->route('EmployeeTrainings.index')->with('success','EmployeeTrainigs has been created successfully.');
    }





}

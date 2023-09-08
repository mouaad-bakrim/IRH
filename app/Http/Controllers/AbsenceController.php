<?php

namespace App\Http\Controllers;

use App\Models\AbsenceType;
use App\Models\User;
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
        $users=User::all();
        $absenceTypes = AbsenceType::all();
        $absence = Absence::all();
        return view('absence.index', compact('absence','absenceTypes','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        $absenceTypes = AbsenceType::all(); // Assurez-vous d'utiliser le nom correct du modèle "AbsenceType"

        return view('absence.index',compact('users','absenceTypes'));
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
            'absenceTypes_id' => 'required',

        ]);

        $startDate = date('Y-m-d', strtotime($request->input('StartDate')));
        $endDate = date('Y-m-d', strtotime($request->input('EndDate')));

        $absenceType = AbsenceType::find($request->input('absenceTypes_id'));

        if (!$absenceType) {
            // Le type d'absence n'existe pas, renvoyez une erreur ou effectuez une action appropriée
            return redirect()->back()->with('error', 'Type d\'absence invalide.');
        }

        $data = [
            'StartDate' => $startDate,
            'EndDate' => $endDate,
            'user_id' => $request->input('user_id'),
            'absenceTypes_id' => $request->input('absenceTypes_id'),
            'AbsenceStatus' => $request->input('AbsenceStatus'),
            ];
        Absence::create($data);

        return redirect()->route('absence.index')->with('success','absence has been created successfully.');
    }





}

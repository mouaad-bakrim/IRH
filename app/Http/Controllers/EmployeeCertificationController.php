<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeCertification;

class EmployeeCertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $EmployeeCertification = EmployeeCertification::all();
        return view('EmployeeCertification.index', compact('EmployeeCertification','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('EmployeeCertification.index',compact('users'));
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
            'CertificationName' => 'required',
            'AcquisitionDate' => 'required',
            'ExpiryDate' => 'required',

        ]);
        $acquisitionDate = date('Y-m-d', strtotime($request->input('AcquisitionDate')));
        $expiryDate = date('Y-m-d', strtotime($request->input('ExpiryDate')));

        $user_id = auth()->user()->id; // Obtenez l'ID de l'utilisateur connecté

        $data = [
            'CertificationName' => $request->input('CertificationName'),
            'AcquisitionDate' => $acquisitionDate,
            'ExpiryDate' => $expiryDate,
            'user_id' => $user_id,
        ];


        EmployeeCertification::create($data);



        return redirect()->route('EmployeeCertification.index')->with('success','EmployeeCertification has been created successfully.');
    }





}

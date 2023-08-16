<?php

namespace App\Http\Controllers;

use App\Mail\PasswordCreated;
use Illuminate\Http\Request;
use App\Models\employer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class employerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employer = employer::orderBy('id','desc')->paginate(5);
        return view('employer.index', compact('employer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');
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
            'nom' => 'required',
            'description' => 'required',
        ]);

        employer::create($request->post());

        return redirect()->route('employer.index')->with('success','employer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(employer $employer)
    {
        return view('employer.show',compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(employer $employer)
    {
        return view('employer.edit',compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employer $employer)
    {
        $request->validate([
            'Nom'    => 'required|string',
            'upload'        => 'required|image',
        ]);

        $employer->fill($request->post())->save();

        return redirect()->route('employer.index')->with('success','employer Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(employer $employer)
    {
        $employer->delete();
        return redirect()->route('employer.index')->with('success', 'employer has been deleted successfully');
    }


    public function createPassword(Request $request, employer $employer)
    {
        $password = Str::random(8); // Génère un mot de passe aléatoire de 8 caractères

        $employer->update([
            'password' => Hash::make($password)
        ]);

        // Envoyer le mot de passe par e-mail
        Mail::to($employer->email)->send(new PasswordCreated($password));

        return redirect()->route('employer.index')->with('success', 'Mot de passe créé et envoyé par e-mail.');
    }
}

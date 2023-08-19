<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function create()
    {
        $role = DB::table('role_type_users')->get();
        return view('employer.create',compact('role'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
            'contrat' => 'required|string',
            'cin' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);


        $data['password'] = Hash::make($data['name'] . '_2023');

        User::create($data);

        return redirect()->route('employer.create')->with('success', 'Employé/gestionnaire créé avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function create()
    {
        $professions = Profession::all();
        $role = DB::table('role_type_users')->get();
        $contrat = DB::table('role_type_employees')->get();
        return view('employees.create',compact('role','contrat','professions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
            'contrat' => 'required|string',
            'cin' => 'required|string',
            'profession_id' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);


        $data['password'] = Hash::make($data['name'] . '_2023');

        User::create($data);

        return redirect()->route('employer.index')->with('success', 'Employé/gestionnaire créé avec succès.');
    }
}

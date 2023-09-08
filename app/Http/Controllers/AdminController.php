<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\Employer;
use App\Models\profession;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function create()
    {
        $professions = profession::all();
        $role = DB::table('role_type_users')->get();
        $contrat = DB::table('contrat_type_employees')->get();
        return view('user.create',compact('role','contrat','professions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'contrat' => 'required|string',
            'cin' => 'required|string',
            'SalaireNet' => 'required|string',
            'SalaireBrut' => 'required|string',
            'PeriodeDeStage' => 'required|string',
            'profession_id' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);


        $data['password'] = Hash::make($data['name'] . '_2023');

        $user = User::create($data);
         Employees::create($data);
        $user->update(['role' => 'Employer']);

        return redirect()->route('employer.index')->with('success', 'Employé/gestionnaire créé avec succès.');
    }

}

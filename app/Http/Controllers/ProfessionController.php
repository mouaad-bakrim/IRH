<?php
namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Profession;

class ProfessionController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $professions = Profession::with('department')->get();
        return view('Profession.index', compact('professions','departments'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('Profession.index', compact('departments'));
    }

    public function store(Request $request)
    {
        Profession::create($request->all());
        return redirect()->route('Profession.index');
    }

    // Ajoutez les méthodes pour l'édition et la suppression ici
}

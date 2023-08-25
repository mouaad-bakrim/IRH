<?php
namespace App\Http\Controllers;

use App\Models\profession;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $users=User::all();
     $departments = Department::all();
        //$departments = Department::with('user')->get();
        return view('Department.index', compact('departments','users'));
    }

    public function create()
    {
        $users=User::all();
        return view('department.index',compact('users'));
    }

    public function store(Request $request)
    {
        Department::create($request->all());
        return redirect()->route('department.index');
    }

    // Ajoutez les méthodes pour l'édition et la suppression ici
}

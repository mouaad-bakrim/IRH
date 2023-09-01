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
        $departmentCount = Department::count();
        //$departments = Department::with('user')->get();
        return view('Department.index', compact('departments','users','departmentCount'));
    }

    public function create()
    {
        $users=User::all();
        return view('department.index',compact('users'));
    }
    public function store(Request $request)
    {
        Department::create($request->all());

        $userId = $request->input('user_id'); // Replace 'user_id' with the actual field name for the user's primary key
        $user = User::find($userId);

        if ($user) {
            $user->update(['role' => 'Manager']);
        }

        return redirect()->route('department.index');
    }

}

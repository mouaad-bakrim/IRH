<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index()
    {
        // Récupérer les utilisateurs avec le rôle "manager"
        $user = User::where('role', 'manager')->get();

        return view('manager.index', compact('user'));
    }

}

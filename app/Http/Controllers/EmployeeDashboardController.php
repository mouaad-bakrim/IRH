<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeDashboardController extends Controller
{
    public function showDashboard()
    {
        // Logique pour récupérer les données spécifiques à l'employé

        return view('employee.dashboard');
    }
}

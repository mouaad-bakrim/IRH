<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerDashboardController extends Controller
{
    public function showDashboard()
    {
        // Logique pour récupérer les données spécifiques à l'employé

        return view('manager.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->isAdmin == 1) {
            return view('dashboard.home');
        } elseif ($user->isAdmin == 0) {
            return view('dashboard.employer');

        } elseif ($user->isAdmin == 0) {
            return view('dashboard.manager');
        } else {
            return view('dashboard.tout');
        }
        }

}

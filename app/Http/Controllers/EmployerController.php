<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\employer;
use Illuminate\Support\Facades\DB;

class employerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = user::orderBy('id','desc')->paginate(5);
        return view('employer.index', compact('user'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ind()
    {
        return view('employer.confirmer1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = DB::table('role_type_users')->get();
        return view('employer.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
            // 'contrat' => 'required|string',
            'cin' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);

        employer::create($request->post());

        return redirect()->route('employer.index')->with('success','employer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(employer $employer)
    {
        return view('employer.show',compact('employer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(employer $employer)
    {
        return view('employer.edit',compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employer $employer)
    {
        $request->validate([
            'name' => 'required|string',
            'prenom' => 'required|string',
            'role' => 'required|string',
            // 'contrat' => 'required|string',
            'cin' => 'required|string',
            'email' => 'required|email|unique:users,email',
        ]);

        $employer->fill($request->post())->save();

        return redirect()->route('employer.index')->with('success','employer Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(employer $employer)
    {
        $employer->delete();
        return redirect()->route('employer.index')->with('success', 'employer has been deleted successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function conf()
    {
        return view('employer.confirmer1');
    }
}

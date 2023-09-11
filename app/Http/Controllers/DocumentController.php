<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        $documents = Document::all();
        return view('document.index', compact('documents','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::all();
        return view('document.index',compact('users'));
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
            'FileURL' => 'required',

        ]);

        $user_id = auth()->user()->id; // Obtenez l'ID de l'utilisateur connecté

        $data = [
            'FileURL' => $request->input('FileURL'),
            'user_id' => $user_id,
        ];


        Document::create($data);



        return redirect()->route('document.index')->with('success','Document has been created successfully.');
    }





}

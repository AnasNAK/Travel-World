<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use Illuminate\Http\Request;

class AdventureController extends Controller
{
    // all
    public function index()
    {
        $adventures = Adventure::with('destination')->get();
    
        return view('adventures.index', [
            'adventures' => $adventures
        ]);
    }

    // single 
    public function show(Adventure $adventure)
    {
        return view('adventures.show', [
            'adventure' => $adventure
        ]);
    }
}

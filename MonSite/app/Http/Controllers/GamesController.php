<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Jeu;

class GamesController extends Controller
{
    public function index()
    {
        $jeux = Jeu::all();
    	return view('games',compact('jeux'));
    }

    public function jeu($nb)
    {
        $jeux = Jeu::find($nb);
        return view('infogame', compact('jeux') );
    }

    public function create()
    {
    	return view('create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
	private $bdd = [
    		'Cyberpunk',
    		'Watch_Dogs_Legion',
    		'Assassin\'s_Creed_Valhalla'
    	];


    public function index()
    {
    	echo "coucou";
    }

    public function send($word)
    {
    	return view('Cyberpunk' , compact('word') );
    }

    public function jeux($nb)
    {
    	@if ($cyberpunk) {
    		return view('Cyberpunk');
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
	private $bdd = [
    		['Cyberpunk', 'Cyberpunk_2077.png', '10 decembre 2020', '2,98c'],
    		['Watch Dogs : Legion', 'watch-dogs-legion-cover-5.jpg','29 octobre 2020', '985€'],
    		['Assassin\'s Creed Valhalla','assassins-creed-valhalla-jaquette-1.jpg', '10 novembre 2020','sur internet tu trouveras, ce que tu cherche tu auras.' ]
    	];


    public function index()
    {
    	return view('games');
    }

    public function jeu($nb)
    {
    	$jeu = $this->bdd[$nb];
    	return view('infogame', ['base' => $jeu ] );
    }

    public function create()
    {
    	return view('create');
    }
}

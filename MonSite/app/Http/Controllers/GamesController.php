<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Jeu;

class GamesController extends Controller
{

    public function index()
    {
        $jeux = Jeu::all();
    	return view('index',compact('jeux'));
    }

    public function show($nb)
    {
        $jeux = Jeu::find($nb);
        if($jeux)
            return view('show', compact('jeux') );
        else
            $messageErreur = 'La page n\'existe pas...';
            return view('show', compact('messageErreur'));
    }

    public function create()
    {
    	return view('create');
    }

    public function store(){
        $jeu = new Jeu();
        $jeu->libelle = request('libelle');
        $jeu->prix = request('prix');
        $jeu->dateSortie = request('dateSortie');

        // on prend le nom de l'image
        $jeu->image = request()->file('filename')->getClientOriginalName();

        request()->file('filename')->storeAs('public/images', $jeu->image);

        $jeu->description = request('description');
        $jeu->save();
        return redirect('Games');
    }
}

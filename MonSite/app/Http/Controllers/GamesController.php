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

    public function show(Jeu $jeu)
    {
        if($jeu)
            return view('show', compact('jeu') );
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

    public function edit(Jeu $jeu){
        return view('edit', compact('jeu'));
    }

    public function update(Jeu $jeu){
        // Mettre à jour les données de cette ressource
        $jeu->libelle = request('libelle');
        $jeu->prix = request('prix');
        $jeu->dateSortie = request('dateSortie');
        $jeu->save();
        return redirect('/Games/'.$jeu);
    }

    public function destroy(Jeu $jeu){
        Jeu::destroy($jeu);
        return redirect('/Games');
    }
}
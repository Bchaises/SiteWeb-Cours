<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Jeu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $jeu = new Jeu;
        $jeu->libelle = 'Cyberpunk';
        $jeu->prix = 2.98;
        $jeu->dateSortie = '26/12/2077';
        $jeu->image = 'cyberpunk_2077.png';
        $jeu->save();

        $jeu = new Jeu;
        $jeu->libelle = 'Watch Dogs : Legion';
        $jeu->prix = 645;
        $jeu->dateSortie = '29/10/2020';
        $jeu->image = 'watch_dogs_legion.jpg';
        $jeu->save();

        $jeu = new Jeu;
        $jeu->libelle = 'Assassin\'s Creed Valhalla';
        $jeu->prix = 456;
        $jeu->dateSortie = '10/11/2020';
        $jeu->image = 'assassin_s_creed_valhalla.jpg';
        $jeu->save();
    }
}

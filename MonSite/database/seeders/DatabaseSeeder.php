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
        $jeu->description = 'Cyberpunk 2077 est un jeu vidéo d\'action-RPG en vue à la première personne développé par CD Projekt RED, fondé sur la série de jeu de rôle sur table Cyberpunk 2020 conçue par Mike Pondsmith. Cyberpunk 2077 présente un monde futuriste dystopique de type cyberpunk dans lequel la technologie coexiste avec une société humaine dégénérée. Le jeu est marqué par un développement particulièrement long, débuté en 2012, en partie parce que le studio réalise en parallèle The Witcher 3. Initialement annoncé pour sortir le 16 avril 2020 sur Windows, Xbox One, PS4 et Stadia, le jeu est repoussé plusieurs fois, jusqu\'au 10 décembre 2020.';
        $jeu->save();

        $jeu = new Jeu;
        $jeu->libelle = 'Watch Dogs : Legion';
        $jeu->prix = 645;
        $jeu->dateSortie = '29/10/2020';
        $jeu->image = 'watch_dogs_legion.jpg';
        $jeu->description = 'Watch Dogs: Legion, typographié WATCH DOGS LΞGION (trad. litt. : « Les chiens de garde : Légion »), est un jeu vidéo d\'action-aventure et d\'infiltration développé par le studio d\'Ubisoft Toronto, en coproduction avec Ubisoft Montreal, Ubisoft Paris, Ubisoft Bucarest et Ubisoft Kiev, et édité par Ubisoft. Suite de Watch Dogs 2 sorti en 2016, le jeu est officialisé au cours de l\'E3 20191 et annoncé le 12 juillet 2020 lors de la conférence Ubisoft Forward pour le 29 octobre 2020 sur PlayStation 4, Xbox One, Microsoft Windows et Stadia. Le jeu sort également sur PlayStation 5 et Xbox Series au moment de leur sortie respective en novembre 2020.';
        $jeu->save();

        $jeu = new Jeu;
        $jeu->libelle = 'Assassin\'s Creed Valhalla';
        $jeu->prix = 456;
        $jeu->dateSortie = '10/11/2020';
        $jeu->image = 'assassin_s_creed_valhalla.jpg';
        $jeu->description = 'Assassin\'s Creed Valhalla est un jeu vidéo d\'action-aventure et de rôle, développé par Ubisoft Montréal et édité par Ubisoft, sorti en novembre 2020 sur Microsoft Windows, PlayStation 4, Xbox One, Xbox Series, Google Stadia et PlayStation 5. Il appartient à la série Assassin\'s Creed et en est le douzième opus canonique. L\'action principale du jeu se déroule pendant l\'ère viking.';
        $jeu->save();
    }
}

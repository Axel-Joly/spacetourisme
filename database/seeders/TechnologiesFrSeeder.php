<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesFrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies_fr')->insert([
            [
                'name' => 'le lanceur',
                'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                'image' => "/img/launcher.png",
            ],
            [
                'name' => 'le spatioport',
                'description' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                'image' => "/img/spatioport.png",
            ],
            [
                'name' => 'la capsule spatiale',
                'description' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
                'image' =>"/img/capsule.png",
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsFrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations_fr')->insert([
            [
                'name' => "lune",
                'image' => "/img/moon.png",
                'description'=>"Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
                'distance' => "384 000 km",
                'duration' => "3 jours"
            ],
            [
                'name' => 'mars',
                'image' =>"/img/mars.png",
                'description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
                'distance' => "225 million km",
                'duration' => "9 mois"
            ],
            [
                'name' => 'europe',
                'image' => "/img/europa.png",
                'description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détendre dans votre confortable chalet hivernal.",
                'distance' => "628 million km",
                'duration' => "3 ans"
            ],
            [
                'name' => 'titan',
                'image' => "/img/titan.png",
                'description' =>"La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contempler des vues saisissantes des anneaux de Saturne.",
                'distance' => "1.6 milliard km",
                'duration' => "7 ans"
            ],
        ]);
    }
}

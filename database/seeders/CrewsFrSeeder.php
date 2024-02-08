<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewsFrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crews_fr')->insert([
            [
                'name' => 'douglas hurley',
                'image' => "/img/douglas_hurley.png",
                'grade' => 'Commandant',
                'description' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaisseau Crew Dragon Demo-2.",
            ],
            [
                'name' => 'mark shuttleworth',
                'image' =>"/img/mark_shuttleworth.png",
                'grade' => 'Specialiste de mission',
                'description' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier Sud-Africain à voyager dans l’espace en tant que touriste spatial.",
            ],
            [
                'name' => 'victor glover',
                'image' => "/img/victor_glover.png",
                'grade' => 'Pilote',
                'description' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
            ],
            [
                'name' => 'anousheh ansari',
                'image' => "/img/anousheh_ansari.png",
                'grade' => 'Ingenieur de vol',
                'description' =>  "Anousheh Ansari est une ingénieure irano-américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première Iranienne dans l'espace.",
            ],
        ]);
    }
}

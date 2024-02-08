<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('crews')->insert([
            [
                'name' => 'douglas hurley',
                'image' => "/img/douglas_hurley.png",
                'grade' => 'Commander',
                'description' => "Douglas Gerald Hurley is an American engineer, a former Marine Corps pilot, and a former NASA astronaut. He ventured into space for the third time as the commander of the Crew Dragon Demo-2 spacecraft.",
            ],
            [
                'name' => 'mark shuttleworth',
                'image' =>"/img/mark_shuttleworth.png",
                'grade' => 'Mission Specialist',
                'description' => "Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Ubuntu Linux-based operating system. Shuttleworth became the first South African to travel to space as a space tourist.",
            ],
            [
                'name' => 'victor glover',
                'image' => "/img/victor_glover.png",
                'grade' => 'Pilot',
                'description' => "Pilot of the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the United States Navy, where he pilots an F/A-18. He was a crew member of Expedition 64 and served as a systems flight engineer.",
            ],
            [
                'name' => 'anousheh ansari',
                'image' => "/img/anousheh_ansari.png",
                'grade' => 'Flight Engineer',
                'description' => "Anousheh Ansari is an Iranian-American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to visit the ISS, and the first Iranian in space.",
            ],
        ]);
    }
}

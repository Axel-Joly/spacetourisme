<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            [
                'name' => 'the launcher',
                'description' => "A launcher or a carrier rocket is a rocket-propelled vehicle used to transport a payload from Earth's surface into space, usually to Earth orbit or beyond. Our WEB-X rocket is the most powerful in service. Standing at 150 meters in height, it provides an impressive spectacle on the launch pad!",
                'image' => "/img/launcher.png",
            ],
            [
                'name' => 'the spaceport',
                'description' => "A spaceport or cosmodrome is a launch (or reception) site for spacecraft, by analogy with the seaport for ships or the airport for aircraft. Based at the famous Cape Canaveral, our spaceport is ideally located to take advantage of Earth's rotation for launch.",
                'image' => "/img/spatioport.png",
            ],
            [
                'name' => 'the space capsule',
                'description' => "A space capsule is a habitable spacecraft that uses a blunt-body capsule to reenter Earth's atmosphere without wings. Our capsule is where you'll spend your time during the flight. It includes a gym, a cinema, and many other activities to entertain you.",
                'image' =>"/img/capsule.png",
            ],
        ]);
    }
}

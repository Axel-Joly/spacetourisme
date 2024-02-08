<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'name' => "moon",
                'image' => "/img/moon.png",
                'description'=>"See our planet like you've never seen it before. A perfect relaxing journey to help you unwind and come back rejuvenated. While you're there, immerse yourself in history by visiting the landing sites of Luna 2 and Apollo 11.",
                'distance' => "384 000 km",
                'duration' => "3 days"
            ],
            [
                'name' => 'mars',
                'image' =>"/img/mars.png",
                'description' => "Don't forget your hiking boots. You'll need them to climb Olympus Mons, the tallest planetary mountain in our solar system. It's twice and a half the size of Everest!",
                'distance' => "225 million km",
                'duration' => "9 months"
            ],
            [
                'name' => 'europa',
                'image' => "/img/europa.png",
                'description' => "The smallest of Jupiter's four Galilean moons, Europa is a winter lover's dream. Its icy surface is perfect for a bit of ice skating, curling, hockey, or just relaxing in your cozy winter cottage.",
                'distance' => "628 million km",
                'duration' => "3 years"
            ],
            [
                'name' => 'titan',
                'image' => "/img/titan.png",
                'description' => "The only known moon to have a dense atmosphere other than Earth, Titan is like a home away from home (just a few hundred degrees colder!). As a bonus, you can gaze at stunning views of Saturn's rings.",
                'distance' => "1.6 billion km",
                'duration' => "7 years"
            ],
        ]);
    }
}

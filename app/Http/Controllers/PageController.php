<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class PageController extends Controller
{
    public function destination(): View
    {
   
    $destinations = [
        'Lune'=>[
            'nom' => 'Lune',

            'image' => asset("/img/Lune.png"),

            'description' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",

            'distance' => "384 000 km",

            'durée' => "3 jours"
        ],
        'Mars'=>[
            'nom' => 'Mars',

            'image' => asset("/img/Mars.png"),

            'description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",

            'distance' => "225 gm",

            'durée' => "9 mois"
        ],
        'Europe'=>[
            'nom' => 'Europe',

            'image' => asset("/img/Europe.png"),

            'description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",

            'distance' => "628 gm",

            'durée' => "3 ans"
        ],
        
        'Titan'=>[
            'nom' => 'Titan',

            'image' => asset("/img/Titan.png"),

            'description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",

            'distance' => "1,6 tm",

            'durée' => "7 ans"
        ],

    ];
    $url = $_SERVER['REQUEST_URI'];
    $name = explode("/",$url) ;
    $page = $name[1];
    if(isset($name[2]) && array_key_exists($name[2], $destinations)){
        $planet = $name[2] ;
    }else{
        $planet = 'Lune';
    }
    $destination = $destinations[$planet];
    $image = $destination['image'];
    $description = $destination['description'];
    $distance = $destination['distance'];
    $duree = $destination['durée'];



        return view('pages.destination', [
            'planet' => $planet,
            'image' => $image,
            'description' => $description,
            'distance' => $distance,
            'duree' => $duree,    
         ]);
    }
}

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
        // définition des données
        $destinations = [
            'moon'=>[
                'name' => 'Lune',

                'image' => asset("/img/moon.png"),

                'description' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",

                'distance' => "384 000 km",

                'duration' => "3 jours"
            ],
            'mars'=>[
                'name' => 'Mars',

                'image' => asset("/img/mars.png"),

                'description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",

                'distance' => "225 gm",

                'duration' => "9 month"
            ],
            'europa'=>[
                'name' => 'Europe',

                'image' => asset("/img/europa.png"),

                'description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",

                'distance' => "628 gm",

                'durée' => "3 years"
            ],
            
            'titan'=>[
                'name' => 'Titan',

                'image' => asset("/img/titan.png"),

                'description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",

                'distance' => "1,6 tm",

                'duration' => "7 years"
            ],

        ];
        // recuperation de {{$planet}} depuis l'url
        $url = $_SERVER['REQUEST_URI'];
        $location = explode("/",$url) ;
        $page = $location[1];
        if(isset($location[2]) && array_key_exists($location[2], $destinations)){
            $planet = $location[2] ;
        }else{
            abort(404);
        }
        // creation des variables de donnée
        $destination = __('destinations.'.$planet);
        $name = $destination['name'];
        $image = $destination['image'];
        $description = $destination['description'];
        $distance = $destination['distance'];
        $duration = $destination['duration'];
        //Affichage de la vue avec les données
        return view('pages.destination', [
            'planet' => $planet,
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'distance' => $distance,
            'duration' => $duration,    
        ]);
    }
    public function crew(): View
    {
        $crew = [
            'douglas_hurley'=>[
                'name' => 'Douglas Hurley',
                'grade' => 'Commandant',
                'image' => asset("/img/douglas_hurley.png"),
                'description' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2."
            ],
            'mark_shuttleworth'=>[
                'name' => 'Mark Shuttleworth',
                'grade' => 'Specialiste de mission',
                'image' => asset("/img/mark_shuttleworth.png"),
                'description' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial."
            ],
            'victor_glover'=>[
                'name' => 'Victor Glover',
                'grade' => 'Pilote',
                'image' => asset("/img/victor_glover.png"),
                'description' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station."
            ],
            'anousheh_ansari'=>[
                'name' => 'Anousheh Ansari',
                'grade' => 'Ingenieur de vol',
                'image' => asset("/img/anousheh_ansari.png"),
                'description' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace."
            ],

        ];
        // recuperation de {{$person}} depuis l'url
        $url = $_SERVER['REQUEST_URI'];
        $part = explode("/",$url) ;
        $page = $part[1];
        if(isset($part[2]) && array_key_exists($part[2], $crew)){
            $people= $part[2] ;
        }else{
            abort(404);
        }
        // creation des variables de donnée
        $person = __('crew.'.$people);
        $name = $person['name'];
        $image = $person['image'];
        $description = $person['description'];
        $grade = $person['grade'];
        //Affichage de la vue avec les données
        return view('pages.crew', [
            'people' => $people,
            'name' => $name,
            'image' => $image,
            'description' => $description,
            'grade' => $grade,
               
        ]);
        
    }
    public function technology(): View
    {
        $tech =[
            'launcher'=>[
                'nom' => 'Le lanceur',
                'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                'image' => asset("/img/launcher.png"),
            ],
            'spaceport'=>[
                'nom' => 'Le spatioport',
                'description' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                'image' => asset("/img/spatioport.png"),
            ],
            'capsule'=>[
                'nom' => 'La capsule spatiale',
                'description' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir",
                'image' => asset("/img/capsule.png"),
            ],
        ];

        // recuperation de {{$person}} depuis l'url
        $url = $_SERVER['REQUEST_URI'];
        $part = explode("/",$url) ;
        $page = $part[1];
        if(isset($part[2]) && array_key_exists($part[2], $tech)){
            $techno = $part[2] ;
        }else{
            abort(404);
        }
        // creation des variables de donnée
        $technology = __('tech.'.$techno);
        $name = $technology['name'];
        $image = $technology['image'];
        $description = $technology['description'];
        //Affichage de la vue avec les données
        return view('pages.technology', [
            'techno' => $techno,
            'name' => $name,
            'image' => $image,
            'description' => $description,   
        ]);
        
    }
}

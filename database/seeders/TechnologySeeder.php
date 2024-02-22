<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $timestamp = now();
        
        DB::table('technologies')->insert([
            'en_name' => "The launcher",
            'fr_name' => "Le lanceur",
            'en_description' => "A launcher or a load carrying rocket is a rocket propelled vehicle used for transporting/carrying a load from the surface of the Earth to space, usually to Earth’s orbit or beyond. Our rocket WEB-X is the most powerful in use. Standing at 150 M in height, it gives a wonderful show on launching.",
            'fr_description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
            'picture' => "storage/img/rocket.jpg",
            'created_at' => $timestamp,
        ]);

        DB::table('technologies')->insert([
            'en_name' => "The space port",
            'fr_name' => "Le spatioport",
            'en_description' => "A spatioport or cosmodrome is a launch site (or landing site) for space craft, an analogy for a harbour for ships or an airport for aircraft. Based on the famous Cape Canaveral, our space port is ideally located to take advantage of the Earth’s rotation for the launch.",
            'fr_description' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
            'picture' => "storage/img/launcher.jpg",
            'created_at' => $timestamp,
        ]);

        DB::table('technologies')->insert([
            'en_name' => "The space capsule",
            'fr_name' => "La capsule spatiale",
            'en_description' => "The space capsule is a habitable space craft that uses a specially protected capsule for reentry into the Earths atmosphere without wings. Our capsule is the place where you will spend your time during the flight. It includes a gym, cinema and a number of other activities to keep you occupied.",
            'fr_description' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir",
            'picture' => "storage/img/capsule.jpg",
            'created_at' => $timestamp,
        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $timestamp = now();
        
        DB::table('destinations')->insert([
            'en_name' => "Moon",
            'fr_name' => "Lune",
            'en_description' => "Look at our planet like you’ve never done before. A perfect relaxing voyage to help gain perspective and return rejuvenated. While you are at it, dive into the history by visiting landing sites of Lunar 2 and Apollo 11.",
            'fr_description' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voyage de détente pour vous aider à prendre du recul et revenir requinqué. Pendant que vous y êtes, plongez-vous dans l'histoire en visitant les sites d'atterrissages de Luna 2 et Apollo 11.",
            'distance' => 384000,
            'distance_unit' => "km",
            'duration' => 3,
            'en_duration_unit' => "Days",
            'fr_duration_unit' => "Jours",
            'picture' => "storage/img/moon.png",
            'created_at' => $timestamp,
        ]);

        DB::table('destinations')->insert([
            'en_name' => "Mars",
            'fr_name' => "Mars",
            'en_description' => "Don’t forget your walking boots. You will need them to climb Mount Olympus, the highest planetary mountain in our solar system. It is two and half times the height of Everest.",
            'fr_description' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demi la taille de l'Everest !",
            'distance' => 225,
            'distance_unit' => "GM",
            'duration' => 9,
            'en_duration_unit' => "Months",
            'fr_duration_unit' => "Mois",
            'picture' => "storage/img/mars.png",
            'created_at' => $timestamp,
        ]);

        DB::table('destinations')->insert([
            'en_name' => "Europa",
            'fr_name' => "Europe",
            'en_description' => "The smallest of the four Galilean moons in orbit around Jupiter, Europa is a dream for winter lovers. Its frozen surface is perfect to ice skate, curling, ice hockey or simply to relax in your comfortable winter chalet.",
            'fr_description' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détendre dans votre confortable chalet hivernal.",
            'distance' => 628,
            'distance_unit' => "GM",
            'duration' => 3,
            'en_duration_unit' => "Years",
            'fr_duration_unit' => "Jours",
            'picture' => "storage/img/europe.png",
            'created_at' => $timestamp,
        ]);

        DB::table('destinations')->insert([
            'en_name' => "Titan",
            'fr_name' => "Titan",
            'en_description' => "The only moon known to have a dense atmosphere apart from the Earth, Titan is a home far from home (and just a few hundred degrees colder!) Bonus, you can admire eye catching views of Saturn’s rings.",
            'fr_description' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la maison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
            'distance' => 1.6,
            'distance_unit' => "TM",
            'duration' => 7,
            'en_duration_unit' => "Years",
            'fr_duration_unit' => "Années",
            'picture' => "storage/img/titan.png",
            'created_at' => $timestamp,
        ]);
    }
}

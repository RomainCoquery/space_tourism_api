<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $timestamp = now();

        DB::table('crews')->insert([
            'name' => "Douglas Hurley",
            'en_description' => "Douglas Gérald Hurley is an American Engineer, he was a pilot in the marines (corps), he was an astronaut at NASA. He went to space for the third time as Commandant of the spaceship crew Dragon Demo- 2.",
            'fr_description' => "Douglas Gérald Hurley est un ingénieur américain, un ancien pilote du Corps des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",
            'en_job' => "Commander",
            'fr_job' => "Commandant",
            'picture' => "storage/img/douglas.png",
            'created_at' => $timestamp,
        ]);

        DB::table('crews')->insert([
            'name' => "Mark Richard Shuttleworth",
            'en_description' => "Mark Richard Shuttleworth is the founder and CEO (Chief Executive Officer) of Canonical, the company behind the OS Ubuntu based on Linux. Shuttleworth became the first South-African to travel to space as a tourist.",
            'fr_description' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",
            'en_job' => "Mission specialist",
            'fr_job' => "Spécialiste de mission",
            'picture' => "storage/img/shuttleworth.png",
            'created_at' => $timestamp,
        ]);

        DB::table('crews')->insert([
            'name' => "Victor Glover",
            'en_description' => "Pilot of the first operational flight of SpaceX’s Crew Dragon to the International Space Station. Glover is a Commandant in the American Navy, where he pilots a F/A-18. He was part of the crew of the expedition of 64.",
            'fr_description' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expédition 64 et a servi comme ingénieur de vol des systèmes de station.",
            'en_job' => "Pilot",
            'fr_job' => "Pilote",
            'picture' => "storage/img/glover.png",
            'created_at' => $timestamp,
        ]);

        DB::table('crews')->insert([
            'name' => "Anousheh Ansari",
            'en_description' => "Anousheh Ansari is an Iranian-American Engineer and cofounder of Prodea Systems. Ansari was the fourth auto financed space tourist, the first auto financed woman to go to the ISS (International Space Station) and the first Iranian in space.",
            'fr_description' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
            'en_job' => "Flight engineer",
            'fr_job' => "Ingénieur de vol",
            'picture' => "storage/img/ansari.png",
            'created_at' => $timestamp,
        ]);
    }
}

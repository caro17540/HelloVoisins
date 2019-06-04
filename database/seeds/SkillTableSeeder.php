<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skill')->insert(['title' => 'Jardinage']);
        DB::table('skill')->insert(['title' => 'Maçonnerie']);
        DB::table('skill')->insert(['title' => 'Peinture']);
        DB::table('skill')->insert(['title' => 'Plomberie']);
        DB::table('skill')->insert(['title' => 'Electricité']);
        DB::table('skill')->insert(['title' => 'Bricolage']);
        DB::table('skill')->insert(['title' => 'Travaux manuels']);
        DB::table('skill')->insert(['title' => 'Réparation']);
        DB::table('skill')->insert(['title' => 'Montage de meubles']);
        DB::table('skill')->insert(['title' => 'Déménagement']);
        DB::table('skill')->insert(['title' => 'Garde d\'enfant']);
        DB::table('skill')->insert(['title' => 'Soutien scolaire']);
        DB::table('skill')->insert(['title' => 'Cours de musique']);
        DB::table('skill')->insert(['title' => 'Cours de langues']);
        DB::table('skill')->insert(['title' => 'Garde d\'animaux']);
        DB::table('skill')->insert(['title' => 'Toilettage']);
        DB::table('skill')->insert(['title' => 'Ménage']);
        DB::table('skill')->insert(['title' => 'Cuisine']);
        DB::table('skill')->insert(['title' => 'Repassage']);
        DB::table('skill')->insert(['title' => 'Entretien automobile']);
        DB::table('skill')->insert(['title' => 'Réparation automobile']);
        DB::table('skill')->insert(['title' => 'Soins esthétiques']);
        DB::table('skill')->insert(['title' => 'Coiffure']);
        DB::table('skill')->insert(['title' => 'Courses']);
		DB::table('skill')->insert(['title' => 'Visite de courtoisie']);
        DB::table('skill')->insert(['title' => 'Garde de maison']);
        DB::table('skill')->insert(['title' => 'Soutien informatique']);
        DB::table('skill')->insert(['title' => 'Rédaction de documents']);
        DB::table('skill')->insert(['title' => 'Démarches administratives']);
        DB::table('skill')->insert(['title' => 'Organisation de fêtes']);
    }
}

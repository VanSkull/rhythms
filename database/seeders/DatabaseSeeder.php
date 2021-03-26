<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('chanteurs')->insert([
            'nom' => "Adèle",
            'photo' => "/img/chanteurs/adele.jpg",
            'id_genre' => 5
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Maroon 5",
            'photo' => "/img/chanteurs/maroon5.jpg",
            'id_genre' => 5
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Eminem",
            'photo' => "/img/chanteurs/eminem.jpg",
            'id_genre' => 7
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Dragonforce",
            'photo' => "/img/chanteurs/dragonforce.jpg",
            'id_genre' => 9
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Elvis Preslay",
            'photo' => "/img/chanteurs/elvispreslay.jpg",
            'id_genre' => 9
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Bebe Rexha",
            'photo' => "/img/chanteurs/beberexha.jpg",
            'id_genre' => 5
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Kanye West",
            'photo' => "/img/chanteurs/kanyewest.jpg",
            'id_genre' => 3
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Johnny Hallyday",
            'photo' => "/img/chanteurs/johnnyhallyday.jpg",
            'id_genre' => 9
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Mozart",
            'photo' => "/img/chanteurs/mozart.jpg",
            'id_genre' => 1
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Chopin",
            'photo' => "/img/chanteurs/chopin.jpg",
            'id_genre' => 1
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Beethoven",
            'photo' => "/img/chanteurs/beethoven.jpg",
            'id_genre' => 1
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Metallica",
            'photo' => "/img/chanteurs/metallica.jpg",
            'id_genre' => 4
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "AC/DC",
            'photo' => "/img/chanteurs/acdc.jpg",
            'id_genre' => 4
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Beyoncé",
            'photo' => "/img/chanteurs/beyonce.jpg",
            'id_genre' => 8
        ]);
        
        DB::table('chanteurs')->insert([
            'nom' => "Michael Jackson",
            'photo' => "/img/chanteurs/michealjackson.jpg",
            'id_genre' => 5
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Chanteur;
use App\Models\Favoris;
use App\Models\Genre;
use App\Models\Song;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FirstController extends Controller
{
    public function index() {
        
        $genres = Genre::all();
        $chanteurs = Chanteur::all();
        $songs = Song::all();
        $favoris = Favoris::all();
        
        return view("firstcontroller.index", ["genres" => $genres, "chanteurs" => $chanteurs, "songs" => $songs, "favoris" => $favoris]);
    }
    
    public function favoris() {
        return view("firstcontroller.favoris");
    }
    
    public function titres() {
        return view("firstcontroller.titres");
    }
    
    public function chanteurs() {
        return view("firstcontroller.chanteurs");
    }
    
    public function chanteur_single($nom) {
        return view("firstcontroller.chanteur_single", ["nom" => $nom]);
    }
    
    public function genres() {
        return view("firstcontroller.genres");
    }
    
    public function search($regex) {
        return view("firstcontroller.search", ["regex" => $regex]);
    }
}

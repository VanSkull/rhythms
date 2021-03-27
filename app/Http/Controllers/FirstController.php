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
        
        $genres = Genre::all();
        $chanteurs = Chanteur::all();
        
        return view("firstcontroller.chanteurs", ["genres" => $genres, "chanteurs" => $chanteurs]);
    }
    
    public function chanteur_single($nom) {
        
        $genres = Genre::all();
        $chanteurs = Chanteur::all();
        
        return view("firstcontroller.chanteur_single", ["nom" => $nom, "genres" => $genres, "chanteurs" => $chanteurs]);
    }
    
    public function genres() {
        return view("firstcontroller.genres");
    }
    
    public function search($regex) {
        return view("firstcontroller.search", ["regex" => $regex]);
    }
    
    public function contenu() {        
        $genres = Genre::all();
        $chanteurs = Chanteur::all();
        
        return view("firstcontroller.contenu", ["genres" => $genres, "chanteurs" => $chanteurs]);
    }
    
    public function store_song(Request $request) {
        $request->validate([
            'music-title' => 'required|min:1|max:255',
            'music-file' => 'required|file|mimes:mp3,ogg',
            'music-photo' => 'required|file|mimes:png,jpeg,jpg',
            'music-chanteur' => 'required|numeric',
            'music-genre' => 'required|numeric',
        ]);
        
        $name_file = $request->file('music-file')->hashName();
        $request->file('music-file')->move("uploads/music_files", $name_file);
        
        $name_photo = $request->file('music-photo')->hashName();
        $request->file('music-photo')->move("uploads/music_photos", $name_photo);
        
        $song = new Song();
        
        $song->titre = $request->input('music-title');
        $song->fichier = "/uploads/music_files/".$name_file;
        $song->image = "/uploads/music_photos/".$name_photo;
        $song->id_chanteur = $request->input('music-chanteur');
        $song->id_genre = $request->input('music-genre');
        
        $song->save();
        
        return back();
    }
    
    public function store_singer(Request $request) {
        /*$request->validate([
            'music-title' => 'required|min:1|max:255',
            'music-file' => 'required|file|mimes:mp3,ogg',
            'music-photo' => 'required|file|mimes:mp3,ogg',
        ]);
        
        $song = new Song();
        
        $song->titre = ;
        $song->fichier = ;
        $song->image = ;
        $song->id_chanteur = ;
        $song->id_genre = ;
        
        $song->save();
        
        return back();*/
    }
    
    public function store_genre(Request $request) {
        /*$request->validate([
            'music-title' => 'required|min:1|max:255',
            'music-file' => 'required|file|mimes:mp3,ogg',
            'music-photo' => 'required|file|mimes:mp3,ogg',
        ]);
        
        $song = new Song();
        
        $song->titre = ;
        $song->fichier = ;
        $song->image = ;
        $song->id_chanteur = ;
        $song->id_genre = ;
        
        $song->save();
        
        return back();*/
    }
}

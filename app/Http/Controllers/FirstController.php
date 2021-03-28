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
        $songs = Song::all();
        
        $songFav = Favoris::whereRaw("id_user=?", [Auth::id()])->orderBy('id_titre', 'desc')->get();
        
        return view("firstcontroller.favoris", ["songs" => $songs, "songFav" => $songFav]);
    }
    
    public function titres() {
        return view("firstcontroller.titres");
    }
    
    public function chanteurs() {
        
        $genres = Genre::all();
        $chanteurs = Chanteur::all();
        
        return view("firstcontroller.chanteurs", ["genres" => $genres, "chanteurs" => $chanteurs]);
    }
    
    public function chanteur_single($id) {
        
        $genres = Genre::all();
        $chanteur = Chanteur::find($id);
        
        return view("firstcontroller.chanteur_single", ["id" => $id, "genres" => $genres, "chanteur" => $chanteur]);
    }
    
    public function genres() {
        return view("firstcontroller.genres");
    }
    
    public function search($regex) {
        $songs = Song::all();
        
        $searchSong = Song::whereRaw("titre LIKE CONCAT('%', ?, '%')", [$regex])->orderBy('titre', 'desc')->get();
        $searchChanteur = Chanteur::whereRaw("nom LIKE CONCAT('%', ?, '%')", [$regex])->orderBy('nom', 'desc')->get();
        $searchGenre = Genre::whereRaw("nom LIKE CONCAT('%', ?, '%')", [$regex])->orderBy('nom', 'desc')->get();
        
        return view("firstcontroller.search", ["regex" => $regex, "songs" => $songs, "searchSong" => $searchSong, "searchChanteur" => $searchChanteur, "searchGenre" => $searchGenre]);
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
        $request->validate([
            'chanteur-nom' => 'required|min:1|max:255',
            'chanteur-photo' => 'required|file|mimes:png,jpeg,jpg',
            'chanteur-genre' => 'required|numeric',
        ]);
        
        $name_photo = $request->file('chanteur-photo')->hashName();
        $request->file('chanteur-photo')->move("uploads/singer_photos", $name_photo);
        
        $chanteur = new Chanteur();
        
        $chanteur->nom = $request->input('chanteur-nom');
        $chanteur->photo = "/uploads/singer_photos/".$name_photo;
        $chanteur->id_genre = $request->input('chanteur-genre');
        
        $chanteur->save();
        
        return back();
    }
    
    public function store_genre(Request $request) {
        $request->validate([
            'genre-title' => 'required|min:1|max:255',
            'genre-file' => 'required|file|mimes:png,jpeg,jpg',
        ]);
        
        $name_photo = $request->file('genre-photo')->hashName();
        $request->file('genre-photo')->move("uploads/genre_photos", $name_photo);
        
        $genre = new Genre();
        
        $genre->nom = $request->input('genre-title');
        $genre->image = "/uploads/genre_photos/".$name_photo;
        
        $genre->save();
        
        return back();
    }
}

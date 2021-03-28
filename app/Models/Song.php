<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $table = "song";
    
    public function chanteur(){
        return $this->belongsTo("App\Models\Chanteur", "id_chanteur");
    }
    
    public function genre(){
        return $this->belongsTo("App\Models\Genre", "id_genre");
    }
}

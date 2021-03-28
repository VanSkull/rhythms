<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chanteur extends Model
{
    use HasFactory;
    protected $table = "chanteurs";
    
    public function genre(){
        return $this->belongsTo("App\Models\Genre", "id_genre");
    }
}

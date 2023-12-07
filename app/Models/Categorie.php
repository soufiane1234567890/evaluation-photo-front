<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categorie extends Model
{
    use HasFactory, Notifiable;

    protected $table ='categories';

    // public function post()
    // {
    //     return $this->hasMany(Post::class);
    // }

    public function getNumberItemByCategorie($id){
         $number = count(Post::where('categorie_id', $id)->get());
         return $number;
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;
    protected $table ='favoritos';
    protected $fillable = ['place_id','place_text','user_id'];
    

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

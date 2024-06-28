<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;
    protected $table ='veiculos';
    protected $fillable = ['user_id','categoria_id','modelo','cor','placa','renavan','imagem_doc','foto'];
    

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

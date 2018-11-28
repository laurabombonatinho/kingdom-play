<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Filme;
use App\Models\Usuario;

class EstatisticaFilme extends Model
{
    protected $fillable = [
        'filmes_id','usuarios_id','totalFilmes'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Usuario;

class Filme extends Model
{
    protected $fillable = [
        'nomeFilme','duracaoFilme','descricaoFilme','avaliacaoFilme','statusFilme'
    ];

    public $timestamps = false;

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class);
    }
}
/*
, 'estatistica__filmes',
         'filmes_id', 'usuarios_id'*/
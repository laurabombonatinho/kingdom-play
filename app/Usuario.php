<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Filme;
use App\Models\Episodio;

class Usuario extends Model
{
    protected $fillable = [
        'nome','email','senha'
    ];

    public $timestamps = false;

    public function filmes(): BelongsToMany
    {
        return $this->belongsToMany(Filme::class);
    }

    public function episodios(): BelongsToMany
    {
        return $this->belongsToMany(Episodio::class);
    }

    ///
    public function usuarios(){
        return $this->hasMany('App\Produto', 'marca_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Usuario;

class Episodio extends Model
{
    protected $fillable = [
        'nomeEp','duracaoEp','statusEp', 'avaliacaoEp', 'temporadas_id'
    ];
    public $timestamps = false;

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class);
    }
}
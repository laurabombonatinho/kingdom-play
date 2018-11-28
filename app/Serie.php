<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'nomeSerie','descSerie','statusSerie', 'avaliacaoSerie'
    ];
}

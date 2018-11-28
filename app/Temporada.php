<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $fillable = [
        'quantTemporada','statusTemporada','avaliacaoTemporada', 'series_id'
    ];
}

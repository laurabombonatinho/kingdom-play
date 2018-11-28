<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Episodio;
use App\Models\Usuario;

class EstatisticaEpisodio extends Model
{
    protected $fillable = [
        'episodios_id','usuarios_id','totalSeries', 'totalEp', 'totalTemp', 'totalAtivas', 'totalAbandonadas', 'totalTerminadas'
    ];
}

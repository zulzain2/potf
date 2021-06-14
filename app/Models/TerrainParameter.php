<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TerrainParameter extends Model
{
    use Notifiable;
    protected $table = 'terrain_parameters';
    public $incrementing = FALSE;

    public function terrain(){
        return $this->belongsTo('App\Models\Terrain', 'id_terrain', 'id');

    }
}

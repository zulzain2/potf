<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use Notifiable;
    protected $table = 'terrains';
    public $incrementing = FALSE;

    public function terrainParams(){
        return $this->hasMany('App\Models\TerrainParameter', 'id_terrain', 'id');
    }
}

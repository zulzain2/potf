<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TerrainSimulationFormula extends Model
{
    use Notifiable;
    protected $table = 'terrain_simulation_formulas';
    public $incrementing = FALSE;

    public function terrainSimulator(){
        return $this->hasOne('App\Models\TerrainSimulator', 'id', 'id_terrain_simulation');
    }

    public function terrainParameter(){
        return $this->hasOne('App\Models\TerrainParameter', 'id', 'id_terrain_parameter');
    }
}

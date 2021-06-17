<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TerrainSimulator extends Model
{
    use Notifiable;
    protected $table = 'terrain_simulators';
    public $incrementing = FALSE;
    protected $with = ['terrainSimulatorFormula.terrainParameter'];

    public function terrainSimulatorFormula(){
        return $this->hasMany('App\Models\TerrainSimulationFormula', 'id_terrain_simulation', 'id')->orderBy('order');
    }
}

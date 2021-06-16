<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TerrainSimulationFormula extends Model
{
    use Notifiable;
    protected $table = 'terrain_simulation_formulas';
    public $incrementing = FALSE;
}

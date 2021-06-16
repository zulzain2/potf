<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PipelineSimulationFormula extends Model
{
    use Notifiable;
    protected $table = 'pipeline_simulation_formulas';
    public $incrementing = FALSE;
}

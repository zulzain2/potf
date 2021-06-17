<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PipelineSimulationFormula extends Model
{
    use Notifiable;
    protected $table = 'pipeline_simulation_formulas';
    public $incrementing = FALSE;

    public function pipelineSimulator(){
        return $this->hasOne('App\Models\PipelineSimulator', 'id', 'id_pipeline_simulation');
    }

    public function pipelineParameter(){
        return $this->hasOne('App\Models\PipelineParameter', 'id', 'id_pipeline_parameter');
    }
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PipelineSimulator extends Model
{
    use Notifiable;
    protected $table = 'pipeline_simulators';
    public $incrementing = FALSE;
    protected $with = ['pipelineSimulatorFormula.pipelineParameter'];

    public function pipelineSimulatorFormula(){
        return $this->hasMany('App\Models\PipelineSimulationFormula', 'id_pipeline_simulation', 'id')->orderBy('order');
    }
}

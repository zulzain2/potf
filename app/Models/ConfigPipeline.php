<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ConfigPipeline extends Model
{
    use Notifiable;
    protected $table = 'config_pipeline';
    public $incrementing = FALSE;

    public function pipeline(){
        return $this->belongsTo('App\Models\Pipeline', 'id_pipeline', 'id');
    }

    public function pipeline_parameter(){
        return $this->belongsTo('App\Models\PipelineParameter', 'id_pipeline_parameter', 'id');
    }

    public function generatePipeline(){
        return $this->belongsTo('App\Models\GeneratePipeline', 'id_generate_pipeline', 'id');
    }
}

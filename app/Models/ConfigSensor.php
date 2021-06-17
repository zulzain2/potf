<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class ConfigSensor extends Model
{
    use Notifiable;
    protected $table = 'config_sensor';
    public $incrementing = FALSE;

    public function sensor(){
        return $this->belongsTo('App\Models\Sensor', 'id_sensor', 'id');
    }

    public function sensor_parameter(){
        return $this->belongsTo('App\Models\SensorParams', 'id_sensor_parameter', 'id');
    }

    public function generatePipeline(){
        return $this->belongsTo('App\Models\GeneratePipeline', 'id_generate_pipeline', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class SensorParams extends Model
{
    use Notifiable;
    protected $table = 'sensor_params';
    public $incrementing = FALSE;

    public function meetinglog()
    {
        return $this->belongsTo('App\Models\Sensor', 'id_sensors', 'id');
    }
}

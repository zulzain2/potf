<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use Notifiable;
    protected $table = 'sensor';
    public $incrementing = FALSE;

    public function params(){
        return $this->hasMany('App\Models\SensorParams', 'id_sensors', 'id');
    }

}

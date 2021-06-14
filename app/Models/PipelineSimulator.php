<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PipelineSimulator extends Model
{
    use Notifiable;
    protected $table = 'pipeline_simulators';
    public $incrementing = FALSE;
}

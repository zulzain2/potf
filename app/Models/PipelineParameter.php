<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class PipelineParameter extends Model
{
    use Notifiable;
    protected $table = 'pipeline_parameters';
    public $incrementing = FALSE;
}

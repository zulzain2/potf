<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Pipeline extends Model
{
    use Notifiable;
    protected $table = 'pipelines';
    public $incrementing = FALSE;
}

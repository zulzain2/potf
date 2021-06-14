<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TerrainSimulator extends Model
{
    use Notifiable;
    protected $table = 'terrain_simulators';
    public $incrementing = FALSE;
}

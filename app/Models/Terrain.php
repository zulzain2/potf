<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    use Notifiable;
    protected $table = 'terrains';
    public $incrementing = FALSE;
}

<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class ConfigTerrain extends Model
{
    use Notifiable;
    protected $table = 'config_terrain';
    public $incrementing = FALSE;

    public function terrain(){
        return $this->belongsTo('App\Models\Terrain', 'id_terrain', 'id');
    }

    public function terrain_parameter(){
        return $this->belongsTo('App\Models\TerrainParameter', 'id_terrain_parameter', 'id');
    }

    public function generatePipeline(){
        return $this->belongsTo('App\Models\GeneratePipeline', 'id_generate_pipeline', 'id');
    }
}

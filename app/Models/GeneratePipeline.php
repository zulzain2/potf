<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class GeneratePipeline extends Model
{
    use Notifiable;
    protected $table = 'generate_pipeline';
    public $incrementing = FALSE;

    public function getEnvironments($val){

        return json_decode($val);
    }

    public function getPipelines($val){
        
        return json_decode($val);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ConfigPipeline;
use App\Models\ConfigTerrain;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\GeneratePipeline;
use App\Models\PipelineParameter;
use App\Models\TerrainParameter;
use App\Models\Terrain;

class GeneratePipelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('lol');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new GeneratePipeline;
        $add->id = Uuid::uuid4()->getHex();
        $add->name = $request->nameConfig;
        $add->total_km = $request->kmRange;

        foreach($request->environment as $key=>$part){
            $envParam = TerrainParameter::where('id_terrain', $part)
            ->with(array('terrain' => function($query) {
                $query->select('id','name');
            }))->get();
            foreach($envParam as $param){
                $new = new ConfigTerrain;
                $new->id = Uuid::uuid4()->getHex();
                $new->id_generate_pipeline = $add->id;
                $new->id_terrain = $param->terrain->id;
                $new->id_terrain_parameter = $param->id;
                $new->km = $key;
                $new->id_status = '1';
                $new->save();
            }
        }

        foreach($request->pipeline as $key=>$part){
            $pipeParam = PipelineParameter::where('id_pipeline', $part)
            ->with(array('pipeline' => function($query) {
                $query->select('id','name');
            }))->get();
            foreach($pipeParam as $param){
                $newP = new ConfigPipeline;
                $newP->id = Uuid::uuid4()->getHex();
                $newP->id_generate_pipeline = $add->id;
                $newP->id_pipeline = $param->pipeline->id;
                $newP->id_pipeline_parameter = $param->id;
                $newP->km = $key;
                $newP->id_status = '1';
                $newP->save();
            }
        }
        
        $add->id_status = '1';
        $add->save();

        return redirect()->back()->with('success', 'New pipeline config added');  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function storeValue(Request $request){
      dd($request);
    }

    public function fetchEnv(Request $request){
        
        $generatePipeline = GeneratePipeline::where('id','=' , $request->id_cp)->where('id_status','=' , 1)->get();
       
        $arr_env = [];
        foreach($generatePipeline as $cp){
          $configEnv = ConfigTerrain::where('id_generate_pipeline','=' , $cp->id)->where('id_status','=' , 1)
          ->with(array('terrain' => function($query) {
              $query->select('id','name');
          }))
          ->with(array('terrain_parameter' => function($query) {
            $query->select('id','name');
          }))
          ->get();
            array_push($arr_env,$configEnv);
        }
        
        $data = [
            'status' => 'success', 
            'message' => 'Successfully get terrain parameters.',
            'data' => $arr_env
        ];
        return json_encode($data);
    }

    public function fetchPipe(Request $request){
        
      $generatePipeline = GeneratePipeline::where('id','=' , $request->id_cp)->where('id_status','=' , 1)->get();
       
      $arr_pipe = [];
      foreach($generatePipeline as $cp){
        $configPipe = ConfigPipeline::where('id_generate_pipeline','=' , $cp->id)->where('id_status','=' , 1)
        ->with(array('pipeline' => function($query) {
            $query->select('id','name');
        }))
        ->with(array('pipeline_parameter' => function($query) {
          $query->select('id','name');
        }))
        ->get();
          array_push($arr_pipe,$configPipe);

        // dd($configPipe);
      }
      // dd($arr_pipe);
      $data = [
          'status' => 'success', 
          'message' => 'Successfully get pipeline parameters.',
          'data' => $arr_pipe
      ];
      return json_encode($data);
    }

}

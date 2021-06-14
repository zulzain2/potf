<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\GeneratePipeline;
use App\Models\PipelineParameter;
use App\Models\TerrainParameter;

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
        $add->km = $request->kmRange;

        $environment = [];
        foreach($request->environment as $key=>$part){
            $obj = (Object)[
                'km' => $key++,
                'id_terrain' => $part
            ];
            array_push($environment, $obj);
        }
        $environment = json_encode($environment);
        $add->environments = $environment;

        $pipeline = [];
        foreach($request->pipeline as $key=>$part){
            $obj = (Object)[
                'km' => $key++,
                'id_pipeline' => $part
            ];
            array_push($pipeline, $obj);
        }
        $pipeline = json_encode($pipeline);
        $add->pipelines = $pipeline;
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

    public function fetchEnv(Request $request){
        
        $id = $request->id_cp;
        $configPipeline = GeneratePipeline::where('id','=' , $id)->where('id_status','=' , 1)->get();

        $arr_env = [];
        foreach($configPipeline as $cp){
           $env = $cp->getEnvironments($cp->environments);
           foreach($env as $k=>$e){
            $envParam = TerrainParameter::where('id_terrain','=' , $e->id_terrain)->where('id_status','=' , 1)
            ->with(array('terrain' => function($query) {
                $query->select('id','name');
            }))->get();
            array_push($arr_env, $envParam);
           }
        }
    
        return json_encode($arr_env);
    }

    public function fetchPipe(Request $request){
        
        $id = $request->id_cp;
        $configPipeline = GeneratePipeline::where('id','=' , $id)->where('id_status','=' , 1)->get();

        $arr_pipe = [];
        foreach($configPipeline as $cp){
           $pipe = $cp->getPipelines($cp->pipelines);
           foreach($pipe as $k=>$e){
            $pipeParam = PipelineParameter::where('id_pipeline','=' , $e->id_pipeline)->where('id_status','=' , 1)->where('id_status','=' , 1)
            ->with(array('pipeline' => function($query) {
                $query->select('id','name');
            }))->get();
               array_push($arr_pipe, $pipeParam);
           }
        }
        $data = [
            'status' => 'success', 
            'message' => 'Successfully get terrain parameters.',
            'data' => $arr_pipe,
            'configPipeline' => $configPipeline
        ];
        return json_encode($data);
    }

}

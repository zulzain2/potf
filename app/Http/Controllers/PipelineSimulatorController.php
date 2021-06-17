<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\PipelineSimulator;
use App\Models\PipelineSimulationFormula;
use Illuminate\Support\Facades\Validator;

class PipelineSimulatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'idPipeline4Simulation' 	            => 'required',
            'pipelineSimulationName' 	    => 'required',
            'pipelineSimulationFormula' 	    => 'required',
        ]);

        if($validator->fails()){
            $data = [
                'status' => 'error', 
                'type' => 'Validation Error',
                'message' => 'Validation error, please check back your input.' ,
                'error_list' => $validator->messages() ,
            ];
            return json_encode($data);
        }

        $first_explodes = explode('{{' , $request->pipelineSimulationFormula); 

        $arr_formulas = [];
        foreach ($first_explodes as $key => $first_explode) {
            
            $sec_explodes = explode('}}' , $first_explode); 

            foreach ($sec_explodes as $key => $sec_explode) {
                array_push($arr_formulas,$sec_explode);
            } 
        }

        $pipeline = New PipelineSimulator;
        $pipeline->id = Uuid::uuid4()->getHex();
        $pipeline->id_pipeline = $request->idPipeline4Simulation;
        $pipeline->name = $request->pipelineSimulationName;
        $pipeline->desc = $request->pipelineSimulationDesc;
        $pipeline->id_status = '1';
        $pipeline->save();
    
        foreach ($arr_formulas as $key => $formula) {
            if($formula){
                $add = New PipelineSimulationFormula;
                $add->id = Uuid::uuid4()->getHex();
                $add->id_pipeline_simulation = $pipeline->id;
                $add->id_pipeline_parameter = $formula;
                $add->order = $key;
                $add->id_status = 1;
                $add->save();
            }
        }

        $data = [
            'status' => 'success', 
            'message' => 'Successfully store new pipeline simulator.'
        ];
        return json_encode($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pipelinesimulators = PipelineSimulator::where('id_pipeline' , $id)->where('id_status' , 1)->get();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully get pipeline simulators.',
            'data' => $pipelinesimulators
        ];
        return json_encode($data);
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
}

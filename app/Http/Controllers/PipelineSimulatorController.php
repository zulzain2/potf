<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\PipelineSimulator;
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
            'idPipeline' 	            => 'required',
            'pipelineSimulationName' 	    => 'required'
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

        $pipeline = New PipelineSimulator;
        $pipeline->id = Uuid::uuid4()->getHex();
        $pipeline->id_pipeline = $request->idPipeline;
        $pipeline->name = $request->pipelineSimulationName;
        $pipeline->desc = $request->pipelineSimulationDesc;
        $pipeline->id_status = '1';
        $pipeline->save();
    
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

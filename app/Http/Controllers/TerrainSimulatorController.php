<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\TerrainSimulator;
use Illuminate\Support\Facades\Validator;

class TerrainSimulatorController extends Controller
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
            'idTerrain' 	            => 'required',
            'terrainSimulationName' 	    => 'required'
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

        $terrain = New TerrainSimulator;
        $terrain->id = Uuid::uuid4()->getHex();
        $terrain->id_terrain = $request->idTerrain;
        $terrain->name = $request->terrainSimulationName;
        $terrain->desc = $request->terrainSimulationDesc;
        $terrain->id_status = '1';
        $terrain->save();
    
        $data = [
            'status' => 'success', 
            'message' => 'Successfully store new terrain simulator.'
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
        $terrainsimulators = TerrainSimulator::where('id_terrain' , $id)->where('id_status' , 1)->get();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully get terrain simulators.',
            'data' => $terrainsimulators
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

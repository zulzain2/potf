<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\SensorParams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SensorParameterController extends Controller
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
            'idSensor' 	            => 'required',
            'sensorParameterName' 	    => 'required',
            'sensorParameterType' 	    => 'required',
            'sensorParameterRequired' 	    => 'required',
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
        
        $terrain = New SensorParams;
        $terrain->id = Uuid::uuid4()->getHex();
        $terrain->id_sensors = $request->idSensor;
        $terrain->name = $request->sensorParameterName;
        $terrain->type = $request->sensorParameterType;
        $terrain->required = $request->sensorParameterRequired == 0 ? 1 : 0;
        $terrain->id_status = '1';
        $terrain->save();
        
        $data = [
            'status' => 'success', 
            'message' => 'Successfully store new terrain parameters.'
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
        $sensorparams = SensorParameter::where('id_sensor' , $id)->where('id_status' , 1)->get();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully get sensor parameters.',
            'data' => $sensorparams
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

    public function fetch(Request $request){
        
        $id = $request->idSensor;
        $sensorparams = SensorParams::where('id_sensors','=' , $id)->where('id_status','=' , 1)->get();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully get terrain parameters.',
            'data' => $sensorparams
        ];
        return json_encode($data);
    }
}

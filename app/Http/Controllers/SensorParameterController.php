<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\SensorParams;
use Illuminate\Http\Request;

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
        if($request->idSensor){
            $terrain = New SensorParams;
            $terrain->id = Uuid::uuid4()->getHex();
            $terrain->id_sensors = $request->idSensor;
            $terrain->name = $request->sensorParameterName;
            $terrain->type = $request->sensorParameterType;
            if($request->sensorParameterRequired){
                $terrain->required = '1';
            }else{
                $terrain->required = '0';
            }
            $terrain->id_status = '1';
            $terrain->save();
        }
        else{
            return redirect()->back()->withErrors(['msg', 'Please select sensor first!']);
        }
        return redirect()->back()->with('success', 'New sensor parameter added');  

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

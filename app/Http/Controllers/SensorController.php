<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Sensor;
use App\Models\SensorParams;
use Illuminate\Http\Request;

class SensorController extends Controller
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
        dd($request);
        
        $add = new Sensor;
        $add->id = Uuid::uuid4()->getHex();
        $id_sensor = $add->id;
        $add->name = $request->name;
        $add->description = $request->description;
        $add->id_status = '1';

        $add->save();
        
        if($request->sensor_type){
            $addType = new SensorParams;
            $addType->id = Uuid::uuid4()->getHex();
            $addType->id_sensors = $id_sensor;
            $addType->params = 'sensor_type';
            $addType->value = $request->sensor_type;
            $addType->id_status = '1';

            $addType->save();
        }

        if($request->latitude){
            $addlatitude = new SensorParams;
            $addlatitude->id = Uuid::uuid4()->getHex();
            $addlatitude->id_sensors = $id_sensor;
            $addlatitude->params = 'latitude';
            $addlatitude->value = $request->latitude;
            $addlatitude->id_status = '1';

            $addlatitude->save();
        }

        if($request->longitude){
            $addlongitude = new SensorParams;
            $addlongitude->id = Uuid::uuid4()->getHex();
            $addlongitude->id_sensors = $id_sensor;
            $addlongitude->params = 'longitude';
            $addlongitude->value = $request->longitude;
            $addlongitude->id_status = '1';

            $addlongitude->save();
        }
        
        if($request->no_attribute){
            for($i = 1; $i <= $request->no_attribute; $i++){
             $string1 = 'name_att';
             $string2 = 'value_att';
             $name_att = $string1 . $i;
             $value_att = $string2 . $i;
             $addNew = new SensorParams;
             $addNew->id = Uuid::uuid4()->getHex();
             $addNew->id_sensors = $id_sensor;
             $addNew->params = $request->$name_att;
             $addNew->value = $request->$value_att;
             $addNew->id_status = '1';
 
             $addNew->save();
 
            }
         }

         return redirect()->back()->withSuccess('New sensor added!');

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
}

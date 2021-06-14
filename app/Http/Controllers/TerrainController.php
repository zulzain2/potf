<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use App\Models\Terrain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terrains = Terrain::where('id_status' , 1)->get();

        $data = [
            'status' => 'success', 
            'message' => 'Successfully get all terrain.',
            'data' => $terrains
        ];
        return json_encode($data);
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
            'terrainName' 	    => 'required',
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

        $terrain = New Terrain;
        $terrain->id = Uuid::uuid4()->getHex();
        $terrain->name = $request->terrainName;
        $terrain->desc = $request->terrainDesc;
        $terrain->id_status = '1';
        $terrain->save();

    
        $data = [
            'status' => 'success', 
            'message' => 'Successfully store new terrain.'
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
     
            $terrain = Terrain::find($id);
            $terrain->delete();

            $data = [
                'status' => 'success', 
                'message' => 'Successfully delete environment.'
            ];
            return json_encode($data);
    }
}

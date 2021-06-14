<?php

namespace App\Http\Controllers;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Models\GeneratePipeline;

class GeneratePipelineController extends Controller
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
        $add = new GeneratePipeline;
        $add->id = Uuid::uuid4()->getHex();
        $add->name = $request->name;
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
}

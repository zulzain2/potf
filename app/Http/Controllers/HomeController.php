<?php

namespace App\Http\Controllers;

use App\Models\GeneratePipeline;
use App\Models\Pipeline;
use App\Models\Sensor;
use App\Models\Terrain;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topBarTitle = "PIPELINE OF THE FUTURE (PotF)";

        $pipelines = Pipeline::where('id_status' , 1)->get();
        $terrains = Terrain::where('id_status' , 1)->get();
        $sensors = Sensor::where('id_status' , 1)->get();
        $configPipeline = GeneratePipeline::where('id_status' , 1)->get();
        
        return view('home.index')->with(compact('topBarTitle','sensors','terrains','pipelines','configPipeline'));
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
        //
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

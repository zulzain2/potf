@extends('layouts.app')

@section('content')

<div class="row pt-5 h-100 mb-0">
  <div class="col-4 pb-2 pt-2 h-100 pe-0">
    <div class="card card-style h-100 mb-0" style="margin-left: 70px;">

      <div class="content my-2 m-1">

        <div class="content m-1" id="tab-group-sidebar">
            <div data-bs-parent="#tab-group-sidebar" class="collapse show" id="tab-terrain">
                <h4 class="text-center mt-2 mb-3">TERRAIN</h4>
                
                <div class="content m-1" id="tab-group-1">

                  <table class="h-100 w-100" style="background-color:transparent !important;border:none">
                    <tr>
                      <td style="background-color:transparent !important;">
                        <div class="input-style has-borders no-icon mb-4 input-style-active">
                          <label for="form5" class="color-highlight">Select A Terrain</label>
                          <select id="form5">
                          <option value="default" disabled="" selected="">Select a Terrain</option>
                          <option value="iOS">iOS</option>
                          <option value="Linux">Linux</option>
                          <option value="MacOS">MacOS</option>
                          <option value="Android">Android</option>
                          <option value="Windows">Windows</option>
                          </select>
                          <span><i class="fa fa-chevron-down"></i></span>
                        </div>
                      </td>
                      <td class="text-center" style="background-color:transparent !important;width:20px">
                        <a id="btn-terrain-config" href="#" style="color:unset"><i class="fas fa-cog ps-1 mb-3"></i></a>
                      </td>
                    </tr>
                  </table>

                  
                    

                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                      <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-terrain">Parameters</a>
                      <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-terrain">Simulation Models</a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1-terrain">
                      <p class="bottom-0">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                      </p>
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2-terrain">
                      <img class="img-fluid rounded-sm mt-2" src="images/pictures/28w.jpg" alt="img">
                    </div>
                  </div>
            </div>
            <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-pipeline">
                <h4 class="text-center mt-2 mb-3">PIPELINE</h4>
                
                <div class="content m-1" id="tab-group-2">
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                      <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-pipe">Pipelines</a>
                      <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-pipe">Simulation Models</a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-2" class="collapse show" id="tab-1-pipe">
                      <p class="bottom-0">
                       sdfsdfsd
                      </p>
                    </div>
                    <div data-bs-parent="#tab-group-2" class="collapse" id="tab-2-pipe">
                      <img class="img-fluid rounded-sm mt-2" src="images/pictures/28w.jpg" alt="img">
                    </div>
                  </div>
            </div>
            <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-sensor">
                <div class="content m-1" id="tab-group-3">
                    <h4 class="text-center mt-2 mb-3">SENSOR</h4>
                    
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                      <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-sensor">Sensor</a>
                      <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-sensor">Tab 2</a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-3" class="collapse show" id="tab-1-sensor">
                      <p class="bottom-0">
                       234234
                      </p>
                    </div>
                    <div data-bs-parent="#tab-group-3" class="collapse" id="tab-2-sensor">
                      <img class="img-fluid rounded-sm mt-2" src="images/pictures/28w.jpg" alt="img">
                    </div>
                  </div>
            </div>
        </div>

      </div>

    </div>

  </div>
  <div class="col-8 pb-2 pt-2 h-100 ps-0">
    {{-- <div class="card card-style h-100 mb-0">

        <div class="content my-2 m-1">

        </div>

    </div> --}}
  </div>
</div>
<div class="col-8">
</div>
</div>

@endsection

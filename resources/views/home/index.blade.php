@extends('layouts.app')

@section('content')

<div id="page-potf" class="main-content row pt-5 h-100 mb-0 d-none">
  <img src="images/poster/utm-potf.jpeg" class="p-3 pe-4 h-100 w-100" style="padding-left:90px !important" alt="">
</div>

<div id="page-concept" class="main-content row pt-5 h-100 mb-0 d-none">
  <img src="images/poster/utm-potf.jpeg" class="p-3 pe-4 h-100 w-100" style="padding-left:90px !important" alt="">
</div>

<div id="page-main" class="main-content row pt-5 h-100 mb-0 ">
  <div class="col-4 pb-1 pt-2 h-100 pe-0">
    <div class="card card-style h-100 mb-0 me-1" style="margin-left: 70px;border-radius:5px">

      <div class="content my-2 m-1">

        <div class="content m-1" id="tab-group-sidebar">
          <div data-bs-parent="#tab-group-sidebar" class="collapse show" id="tab-terrain">

            @include('environment/index')

          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-pipeline">

            @include('pipeline/index')
            
          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-sensor">
            
            @include('sensor/index')
            
          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-create_pipeline">
            @include('generatePipeline/index')
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="col-8 pb-1 pt-2 h-100 ps-0">

    <div class="card card-style mb-0 ms-0 me-1" style="height:63.3%;border-radius:5px">

      {{-- <table id="section1-empty" class="w-100 h-100" style="border:none;background-color:transparent !important">
        <tr>
          <td class="align-middle text-center" style="background-color:transparent !important">
            <img id="empty_3dmodel" src="images/icons/pipeline.png" style="width:20%" alt="">
          </td>
        </tr>
      </table> --}}

      {{-- <div id="potf3d" class="d-none" style="height:100%;border-radius:5px;"> --}}
      <div id="potf3d" style="height:100%;border-radius:5px;">
        @include('3dmodel.section1')
      </div> 

    </div>

    <div class="" style="height:0.7%;"></div>

    <div class="card card-style mb-0 ms-0 me-1" style="height:10.3%;border-radius:5px">

      {{-- <table id="section2-empty" class="w-100 h-100" style="border:none;background-color:transparent !important">
        <tr>
          <td class="align-middle" style="background-color:transparent !important">
            <p class="text-center m-0">No generated pipeline selected. Please select first.</p>
          </td>
        </tr>
      </table> --}}

      {{-- <div id="section2-3d" class="d-none"> --}}
      <div id="section2-3d">
        @include('3dmodel.section2')
      </div>
      
    </div>

    <div class="" style="height:0.7%;"></div>

    <div class="card card-style mb-0 ms-0 me-1" style="height:25%;border-radius:5px">

      {{-- <table id="section3-empty" class="w-100 h-100" style="border:none;background-color:transparent !important">
        <tr>
          <td class="align-middle" style="background-color:transparent !important">
              <p class="text-center m-0">...</p>
          </td>
        </tr>
      </table> --}}
{{-- <style>
  #section3-3d{
    height: 0;
    overflow: hidden;
    transition: height 0.8s ease;
}
</style> --}}
      <div id="section3-3d">
        @include('3dmodel.section3')
      </div>
      
    </div>
  </div>

</div>

@endsection







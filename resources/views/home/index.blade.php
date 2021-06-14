@extends('layouts.app')

@section('content')

<div class="row pt-5 h-100 mb-0">
  <div class="col-4 pb-2 pt-2 h-100 pe-0">
    <div class="card card-style h-100 mb-0" style="margin-left: 70px;">

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
  <div class="col-8 pb-2 pt-2 h-100 ps-0">
    {{-- <div class="card card-style h-100 mb-0">

        <div class="content my-2 m-1">

        </div>

    </div> --}}
  </div>
</div>


@endsection



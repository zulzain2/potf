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
            <div class="content m-1" id="tab-group-3">
              <h4 class="text-center mt-2 mb-3">SENSOR</h4>

              <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-sensor">List of Sensors</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-sensor">Add new Sensor</a>
              </div>
              <div class="clearfix mb-3"></div>
              <div data-bs-parent="#tab-group-3" class="collapse show" id="tab-1-sensor">
                <p class="bottom-0">
                  @include('sensor/index')

                </p>
              </div>
              <div data-bs-parent="#tab-group-3" class="collapse" id="tab-2-sensor">
                @include('sensor/create')
              </div>
            </div>
          </div>

          <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-create_pipeline">
            <div class="content m-1" id="tab-group-4">
              <h4 class="text-center mt-2 mb-3">CREATE PIPELINE</h4>

              <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-create_pipeline">Tab 1</a>
                <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-create_pipeline">Tab 2</a>
              </div>
              <div class="clearfix mb-3"></div>
              <div data-bs-parent="#tab-group-4" class="collapse show" id="tab-1-create_pipeline">
                <p class="bottom-0">
                  234234
                </p>
              </div>
              <div data-bs-parent="#tab-group-4" class="collapse" id="tab-2-create_pipeline">
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


@endsection



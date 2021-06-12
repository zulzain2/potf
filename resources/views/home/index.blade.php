@extends('layouts.app')

@section('content')

<div class="row pt-5 h-100 mb-0">
  <div class="col-4 pb-2 pt-2 h-100 pe-0">
    <div class="card card-style h-100 mb-0" style="margin-left: 70px;">

      <div class="content my-2 m-1">

        <div class="content m-1" id="tab-group-sidebar">
            <div data-bs-parent="#tab-group-sidebar" class="collapse show" id="tab-environment">
                <h4 class="text-center mt-2 mb-3">ENVIRONMENT</h4>
                
                <div class="content m-1" id="tab-group-1">
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                      <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-env">Environment</a>
                      <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-env">Simulation</a>
                    </div>
                    <div class="clearfix mb-3"></div>
                    <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1-env">
                      <p class="bottom-0">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                        scrambled it to make a type specimen book.
                      </p>
                    </div>
                    <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2-env">
                      <img class="img-fluid rounded-sm mt-2" src="images/pictures/28w.jpg" alt="img">
                    </div>
                  </div>
            </div>
            <div data-bs-parent="#tab-group-sidebar" class="collapse" id="tab-pipeline">
                <h4 class="text-center mt-2 mb-3">PIPELINE</h4>
                
                <div class="content m-1" id="tab-group-2">
                    <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                      <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-pipe">Pipeline</a>
                      <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-pipe">Simulation</a>
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

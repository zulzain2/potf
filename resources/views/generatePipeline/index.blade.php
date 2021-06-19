@php
    // dd();
@endphp
<div id="generatePipeline"></div>
<h4 class="text-center mt-2 mb-3">Pipeline Segment</h4>

<div class="content m-1">

  <div class="text-center" style="background-color:transparent !important;width:100%;">
    <a id="btn-sensor-config" data-menu="menu-add-config" href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s border-highlight bg-highlight">
      <i class="fas fa-plus"> &nbsp;&nbsp; Add Pipeline Segment</i>
    </a>
  </div>
  <div class="clearfix mb-3"></div>

  <div class="content mb-0">
    <div class="row mb-2">
      <div class="col-8">
        <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Pipeline Segment List</h4>
      </div>
    </div>

    <div class="" id="sensorParameterList">
       
      @if(count($configPipeline) != 0)
        @foreach($configPipeline as $cp)
        <table class="w-100" style="background-color:transparent !important;border:none">
          <tr>
            <td style="background-color:transparent !important;">
              <a href="#" class="select-pipeline hvr-grow icon icon-xs rounded-sm shadow-l me-1 bg-green-dark">
                <i class="fas fa-eye"></i>
              </a>
            </td>
            <td style="background-color:transparent !important;">  
              <span>{{$cp->name}}</span> <br>
              <small>{{$cp->start_km}} km to {{$cp->end_km}} km</small>
            </td>
            <td style="background-color:transparent !important;">
              <small class="text-right"> {{$cp->total_km}} km</small>
              
            </td>
            <td class="ps-2"  style="background-color:transparent !important;">
              <a href="#" data-menu="menu-config" onclick="configPipeline('{{$cp->id}}')" class="color-invert">
                <i class="fas fa-cog text-right"></i>
              </a>
            </td>
          </tr>
        </table>
            <div class="divider mt-2 mb-2"></div>
        @endforeach
      @else
        <p class="text-center">Please create the Pipeline Segment first</p>
      @endif
      <br>
    </div>
  </div>
      

    



</div>


@push('content2')

<div id="menu-add-config" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px" data-menu-height="600" data-menu-width="700">
  <div class="menu-title mt-n1">
    <h1>Create Pipeline Segment</h1>
    <p class="color-highlight">Add environment, pipeline and sensor for pipeline segment.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('generatepipeline.store') }}" method="post">
      @csrf
      <table class="h-100 w-100" style="background-color:transparent !important;border:none">
        <tr>
          <td colspan="3" style="background-color:transparent !important;">
            <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
              <input type="name" class="form-control validate-name" name="nameConfig" id="nameConfig" placeholder="Name">
              <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">Pipeline Segment Name</label>
              <i class="fa fa-times disabled invalid color-red-dark"></i>
              <i class="fa fa-check disabled valid color-green-dark"></i>
              <em>(required)</em>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
              <input type="name" class="form-control validate-name" name="start_km" id="start_km" placeholder="KM Start">
              <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">Start (KiloMeter)</label>
              <i class="fa fa-times disabled invalid color-red-dark"></i>
              <i class="fa fa-check disabled valid color-green-dark"></i>
              <em>(required)</em>
            </div>
          </td>
          <td>
            <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
              <input type="name" class="form-control validate-name" name="end_km" id="end_km" placeholder="KM End">
              <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">End (KiloMeter)</label>
              <i class="fa fa-times disabled invalid color-red-dark"></i>
              <i class="fa fa-check disabled valid color-green-dark"></i>
              <em>(required)</em>
            </div> 
          </td>
          <td>
            <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
              <input type="name" class="form-control validate-name" name="total" id="total" placeholder="KM Total">
              <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">Total (KiloMeter)</label>
              <i class="fa fa-times disabled invalid color-red-dark"></i>
              <i class="fa fa-check disabled valid color-green-dark"></i>
              <em>(required)</em>
            </div>
          </td>
        </tr>
      </table>
      <div class="row">
        <div class="col-12 text-center">
          <div class="card card-style">
            <div class="content mb-2" style="overflow-y: scroll;">
              <div class="content m-1" id="tab-group-4">

                <table class="h-100 w-100" style="background-color:transparent !important;border:none">
                  <tr>
                    <td style="background-color:transparent !important;">
                    
                    </td>
                  </tr>
                </table>
              
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                  <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-cp">Environment</a>
                  <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-cp">Pipeline</a>
                  <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3-cp">Sensor</a>
                </div>
                <div class="clearfix mb-3"></div>
                <div data-bs-parent="#tab-group-4" class="collapse show" id="tab-1-cp">
                  <div class="content mb-0">
                  <a id="btn-sensor-config" onclick="addEnvironment()" data-menu="menu-add-config" href="#" class="btn btn-3d btn-xs btn-full mb-3 rounded-xs text-uppercase font-500 shadow-s border-highlight bg-highlight" style="float: right">
                    <i class="fas fa-plus"></i> &nbsp;&nbsp; Add Environment
                  </a>
              
                    <div>
                      <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                        <thead>
                        <tr class="bg-gray-dark">
                        <th colspan="3" scope="col" class="color-white" width="40%">Range(KM)</th>
                        <th scope="col" class="color-white">Environment</th>
                        </tr>
                        </thead>
                          <tbody id="addEnvironment">
                            <tr>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="start[]" id="startKMEnv" placeholder="Start">
                                  <label for="form1" class="color-highlight">Start</label>
                                </div>
                              </td>
                              <td>
                                <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
                              </td>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="end[]" id="endKMEnv" placeholder="End">
                                  <label for="form1" class="color-highlight">End</label>
                                </div>
                              </td>
                              <td>
                                <select class="form-select" name="environment[]" id="environment" >
                                <option value="default" disabled="" selected="">Select Environment</option>
                                @if(count($terrains) > 0) 
                                  @foreach ($terrains as $terrain)
                                    <option value="{{$terrain->id}}">{{$terrain->name}}</option>       
                                  @endforeach
                                @endif
                               </select>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="divider"></div>
                  </div>
                </div>
              
                <div data-bs-parent="#tab-group-4" class="collapse" id="tab-2-cp">
                  <div class="content mb-0">
                    <a id="btn-sensor-config" onclick="addPipeline()" data-menu="menu-add-config" href="#" class="btn btn-3d btn-xs btn-full mb-3 rounded-xs text-uppercase font-500 shadow-s border-highlight bg-highlight" style="float: right">
                      <i class="fas fa-plus"></i> &nbsp;&nbsp; Add Pipeline
                    </a>
              
                    <div>
                      <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                        <thead>
                        <tr class="bg-gray-dark">
                        <th colspan="3" scope="col" class="color-white" width="40%">Range(KM)</th>
                        <th scope="col" class="color-white" style="width:30%">Pipeline</th>
                        </tr>
                        </thead>
                          <tbody id="addPipeline">
                            <tr>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="start[]" id="startKMPipe" placeholder="Start">
                                  <label for="form1" class="color-highlight">Start</label>
                                </div>
                              </td>
                              <td>
                                <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
                              </td>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="end[]" id="endKMPipe" placeholder="End">
                                  <label for="form1" class="color-highlight">End</label>
                                </div>
                              </td>
                              <td>
                                <select class="form-select" name="pipeline[]" id="pipeline" >
                                <option value="default" disabled="" selected="">Select Pipeline</option>
                                @if(count($pipelines) > 0)
                                  @foreach ($pipelines as $pipeline)
                                    <option value="{{$pipeline->id}}">{{$pipeline->name}}</option>       
                                  @endforeach
                                @endif
                               </select>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="divider"></div>
                  </div>
                </div>
        
                <div data-bs-parent="#tab-group-4" class="collapse" id="tab-3-cp">
                  <div class="content mb-0">
                    <a id="btn-sensor-config" onclick="addSensor()" data-menu="menu-add-config" href="#" class="btn btn-3d btn-xs btn-full mb-3 rounded-xs text-uppercase font-500 shadow-s border-highlight bg-highlight" style="float: right">
                      <i class="fas fa-plus"></i> &nbsp;&nbsp; Add Sensor
                    </a>
              
                    <div>
                      <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                        <thead>
                        <tr class="bg-gray-dark">
                        <th colspan="3" scope="col" class="color-white" width="40%">Range(KM)</th>
                        <th scope="col" class="color-white" style="width:30%">Sensor</th>
                        </tr>
                        </thead>
                          <tbody id="addSensor">
                            <tr>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="start[]" id="startKMSensor" placeholder="Start">
                                  <label for="form1" class="color-highlight">Start</label>
                                </div>
                              </td>
                              <td>
                                <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
                              </td>
                              <td>
                                <div class="input-style has-borders has-icon validate-field mb-4">
                                  <input type="text" class="form-control validate-name" name="end[]" id="endKMSensor" placeholder="End">
                                  <label for="form1" class="color-highlight">End</label>
                                </div>
                              </td>
                              <td>
                                <select class="form-select" name="sensor[]" id="sensor" >
                                <option value="default" disabled="" selected="">Select Sensor</option>
                                @if(count($sensors) > 0)
                                  @foreach ($sensors as $sensor)
                                    <option value="{{$sensor->id}}">{{$sensor->name}}</option>       
                                  @endforeach
                                @endif
                               </select>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
              
                    <div class="divider"></div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">

        <button type="submit" id="submitGeneratePipeline" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight">&nbsp;&nbsp;Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="menu-config" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px" data-menu-height="600" data-menu-width="700">
  <div class="menu-title mt-n1">
    <h1>Pipeline Segment Parameter</h1>
    <p class="color-highlight">Add environment, pipeline and sensor parameter value.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('generatepipeline.storeValue') }}" method="post">
      @csrf
      <input type="hidden" name="id_cp" id="id_cp">
      
      <div class="content m-1" id="tab-group-5">

        <table class="h-100 w-100" style="background-color:transparent !important;border:none">
          <tr>
            <td style="background-color:transparent !important;">
            
            </td>
          </tr>
        </table>
      
        <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
          <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-cp">Environment</a>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-cp">Pipeline</a>
          <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3-cp">Sensor</a>
        </div>
        <div class="clearfix mb-3"></div>
        <div data-bs-parent="#tab-group-5" class="collapse show" id="tab-1-cp">
          <div class="content mb-0">
            <div class="row mb-2">
              <div class="col-8">
                <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Environment Parameter List</h4>
              </div>
            </div>
      
            <div>
              <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                <thead>
                <tr class="bg-gray-dark">
                <th scope="col" class="color-white" style="width:10%">KM</th>
                <th scope="col" class="color-white" style="width:30%">Environment</th>
                <th scope="col" class="color-white" style="width:30%">Parameter</th>
                <th scope="col" class="color-white" style="width:30%">Value</th>
                </tr>
                </thead>
                  <tbody id="envParamList">
                </tbody>
              </table>
            </div>
      
            <div class="divider"></div>
          </div>
        </div>
      
        <div data-bs-parent="#tab-group-5" class="collapse" id="tab-2-cp">
          <div class="content mb-0">
            <div class="row mb-2">
              <div class="col-8">
                <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Pipeline Parameter List</h4>
              </div>
            </div>
      
            <div>
              <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                <thead>
                <tr class="bg-gray-dark">
                <th scope="col" class="color-white" style="width:10%">KM</th>
                <th scope="col" class="color-white" style="width:30%">Pipeline</th>
                <th scope="col" class="color-white" style="width:30%">Parameter</th>
                <th scope="col" class="color-white" style="width:30%">Value</th>
                </tr>
                </thead>
                  <tbody id="pipeParamList">
                </tbody>
              </table>
            </div>
      
            <div class="divider"></div>
          </div>
        </div>

        <div data-bs-parent="#tab-group-5" class="collapse" id="tab-3-cp">
          <div class="content mb-0">
            <div class="row mb-2">
              <div class="col-8">
                <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Sensor Parameter List</h4>
              </div>
            </div>
      
            <div>
              <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                <thead>
                <tr class="bg-gray-dark">
                <th scope="col" class="color-white" style="width:10%">KM</th>
                <th scope="col" class="color-white" style="width:30%">Sensor</th>
                <th scope="col" class="color-white" style="width:30%">Parameter</th>
                <th scope="col" class="color-white" style="width:30%">Value</th>
                </tr>
                </thead>
                  <tbody id="sensorParamList">
                </tbody>
              </table>
            </div>
      
            <div class="divider"></div>
          </div>
        </div>
      
      </div>
       <div class="row">
        <div class="col-12 text-center">
        <button type="submit" id="submitGeneratePipelineValue" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight">Submit</button>
        </div>
      </div> 
    </form>
  </div>
</div>

@endpush

@push('scripts')
<script>

    function openConfig(){
      let kmrange = $('#kmrange').val();
      console.log(kmrange);
      document.getElementById("kmRange").value = kmrange;
    }

    function addEnvironment(){
      
      let j = 1;
      $('#addEnvironment').append(`
          <tr>
            <td>
              <div class="input-style has-borders has-icon validate-field mb-4">
                <input type="text" class="form-control validate-name" name="start[]" id="startKMEnv" placeholder="Start">
                <label for="form1" class="color-highlight">Start</label>
              </div>
            </td>
            <td>
              <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
            </td>
            <td>
              <div class="input-style has-borders has-icon validate-field mb-4">
                <input type="text" class="form-control validate-name" name="end[]" id="endKMEnv" placeholder="End">
                <label for="form1" class="color-highlight">End</label>
              </div>
            </td>
            <td>
              <select class="form-select" name="environment[]" id="environment" >
              <option value="default" disabled="" selected="">Select Environment</option>
              @if(count($terrains) > 0) 
                @foreach ($terrains as $terrain)
                  <option value="{{$terrain->id}}">{{$terrain->name}}</option>       
                @endforeach
              @endif
              </select>
            </td>
          </tr>
            `)
          j++;
    }
    function addPipeline(){
      
      let k = 1;
      $('#addPipeline').append(`
          <tr>
            <td>
              <div class="input-style has-borders has-icon validate-field mb-4">
                <input type="text" class="form-control validate-name" name="start[]" id="startKMPipe" placeholder="Start">
                <label for="form1" class="color-highlight">Start</label>
              </div>
            </td>
            <td>
              <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
            </td>
            <td>
              <div class="input-style has-borders has-icon validate-field mb-4">
                <input type="text" class="form-control validate-name" name="end[]" id="endKMPipe" placeholder="End">
                <label for="form1" class="color-highlight">End</label>
              </div>
            </td>
            <td>
              <select class="form-select" name="pipeline[]" id="pipeline" >
              <option value="default" disabled="" selected="">Select Pipeline</option>
              @if(count($pipelines) > 0) 
                @foreach ($pipelines as $pipeline)
                  <option value="{{$pipeline->id}}">{{$pipeline->name}}</option>       
                @endforeach
              @endif
              </select>
            </td>
          </tr>
            `)
            k++;
    }
    function addSensor(){
      
      let l = 1;
      $('#addSensor').append(`
          <tr>
            <td>
                <div class="input-style has-borders has-icon validate-field mb-4">
                  <input type="text" class="form-control validate-name" name="start[]" id="startKMSensor" placeholder="Start">
                  <label for="form1" class="color-highlight">Start</label>
                </div>
              </td>
              <td>
                <i class="fal fa-caret-right fa-4x" style="display: flex;justify-content: center;align-items: center;"></i>
              </td>
              <td>
                <div class="input-style has-borders has-icon validate-field mb-4">
                  <input type="text" class="form-control validate-name" name="end[]" id="endKMSensor" placeholder="End">
                  <label for="form1" class="color-highlight">End</label>
                </div>
              </td>
            <td>
              <select class="form-select" name="sensor[]" id="sensor" >
              <option value="default" disabled="" selected="">Select Sensor</option>
              @if(count($sensors) > 0) 
                @foreach ($sensors as $sensor)
                  <option value="{{$sensor->id}}">{{$sensor->name}}</option>       
                @endforeach
              @endif
              </select>
            </td>
          </tr>
            `)
          l++;
    }
    

      function configPipeline(id_cp){
        $('#envParamList').html('');
        $('#pipeParamList').html('');
        $('#sensorParamList').html('');
        
        document.getElementById("id_cp").value = id_cp;
        fetchEnv(id_cp);
        fetchPipe(id_cp);
        fetchSensor(id_cp);

      }

      function fetchEnv(id_cp){
        $.ajax({
          url:"{{ route('generatepipeline.fetchEnv') }}",
          method:"POST",
          data:{
              id_cp
          },
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          success: (resultsJSON) =>{
            let results = JSON.parse(resultsJSON);
            
            results.data.map(a =>{
                a.forEach(el =>{
                  $('#envParamList').append(`
                    <tr>
                      <th scope="row">${el.km}</th>
                      <th scope="row">${el.terrain.name}</th>
                      <td scope="row">${el.terrain_parameter.name}</td>
                      <td scope="row">
                      <input type="text" class="form-control" id="value-${el.id}" ${el.required == 1 ? 'required' : ''} name="value[]"" value="${el.value ? el.value : ''}">
                      <input type="hidden" name="id[]" id="${el.id}" value="${el.id}">
                      </td>

                    </tr>
                  `)
                })
              })
          

          },
          error: err => console.error(err)
        })
      }

      function fetchPipe(id_cp){
        $.ajax({
          url:"{{ route('generatepipeline.fetchPipe') }}",
          method:"POST",
          data:{
              id_cp
          },
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          success: (resultsJSON) =>{
          
            let results = JSON.parse(resultsJSON);
            results.data.map(a =>{
                a.forEach(el =>{
                  $('#pipeParamList').append(`
                    <tr>
                      <th scope="row">${el.km}</th>
                      <th scope="row">${el.pipeline.name}</th>
                      <td scope="row">${el.pipeline_parameter.name}</td>
                      <td scope="row">
                      <input type="text" class="form-control" id="value-${el.id}" ${el.required == 1 ? 'required' : ''} name="value[]"" value="${el.value ? el.value : ''}">
                      <input type="hidden" name="id[]" id="${el.id}" value="${el.id}">
                      </td>

                    </tr>
                  `)
                })
              })
          },
          error: err => console.error(err)
        })
      }

      function fetchSensor(id_cp){
        $.ajax({
          url:"{{ route('generatepipeline.fetchSensor') }}",
          method:"POST",
          data:{
              id_cp
          },
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          success: (resultsJSON) =>{
          
            let results = JSON.parse(resultsJSON);
            results.data.map(a =>{
                a.forEach(el =>{
                  $('#sensorParamList').append(`
                    <tr>
                      <th scope="row">${el.km}</th>
                      <th scope="row">${el.sensor.name}</th>
                      <td scope="row">${el.sensor_parameter.name}</td>
                      <td scope="row">
                      <input type="text" class="form-control" id="value-${el.id}" ${el.required == 1 ? 'required' : ''} name="value[]"" value="${el.value ? el.value : ''}">
                      <input type="hidden" name="id[]" id="${el.id}" value="${el.id}">
                      </td>

                    </tr>
                  `)
                })
              })
          },
          error: err => console.error(err)
        })
      }

</script>
@endpush
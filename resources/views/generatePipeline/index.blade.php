@php
    // dd();
@endphp
<div id="generatePipeline"></div>
<h4 class="text-center mt-2 mb-3">CREATE CONFIG PIPELINE</h4>

<div class="content m-1">

  <table class="h-100 w-100" style="background-color:transparent !important;border:none">
    <tr>
      <td style="background-color:transparent !important;">
        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
          <input type="name" class="form-control validate-name" name="kmrange" id="kmrange" placeholder="KM range">
          <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">KiloMeter Range</label>
          <i class="fa fa-times disabled invalid color-red-dark"></i>
          <i class="fa fa-check disabled valid color-green-dark"></i>
          <em>(required)</em>
          </div>
      </td>
    </tr>
  </table>
  <div class="text-center" style="background-color:transparent !important;width:100%;">
    <a id="btn-sensor-config" onclick="addConfig()" data-menu="menu-add-config" href="#" class="btn btn-3d btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s border-highlight bg-highlight">
      <i class="fas fa-plus"></i>
    </a>
  </div>
  <div class="clearfix mb-3"></div>
  <div class="card card-style" style="overflow: auto !important">
    <div class="content mt-0 mb-0">
      <div class="row mb-2">
        <div class="col-8">
          <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Config List</h4>
        </div>
      </div>

      <div class="list-group list-custom-large short-border check-visited" id="sensorParameterList">
        <br>
        @if(count($configPipeline) != 0)
          @foreach($configPipeline as $cp)
            <a href="#" data-menu="menu-config" onclick="configPipeline('{{$cp->id}}')">
              <i class="fa fa-angle-right bg-green-dark rounded-s"></i>
                <span>{{$cp->name}}</span>
                <strong>Click to enter the parameter value</strong>
              </a>
              <hr>
          @endforeach
        @else
          <p class="text-center">Please create the config first</p>
        @endif
        <br>
      </div>

      <div class="divider"></div>
    </div>
  </div>

</div>


@push('content2')

<div id="menu-add-config" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px" data-menu-height="600" data-menu-width="700">
  <div class="menu-title mt-n1">
    <h1>Generate Pipeline Configuration</h1>
    <p class="color-highlight">Add Environment and pipeline.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('generatepipeline.store') }}" method="post">
      @csrf
      <input type="hidden" name="kmRange" id="kmRange">
      <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
        <input type="name" class="form-control validate-name" name="nameConfig" id="nameConfig" placeholder="Name">
        <label for="form1ab" class="color-theme opacity-50 text-uppercase font-700 font-10">Config Name</label>
        <i class="fa fa-times disabled invalid color-red-dark"></i>
        <i class="fa fa-check disabled valid color-green-dark"></i>
        <em>(required)</em>
        </div>
      <div class="row">
        <div class="col-12 text-center">
          <div class="card card-style">
            <div class="content mb-2" style="overflow-y: scroll;">
              <div>
                <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;" >
                  <thead>
                  <tr class="bg-gray-dark">
                  <th scope="col" class="color-white" style="width:10%">KM</th>
                  <th scope="col" class="color-white" style="width:45%">Environment</th>
                  <th scope="col" class="color-white" style="width:45%">Pipeline</th>
                  </tr>
                  </thead>
                  <tbody id="addEnvironmentandPipeline">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">

        <button type="submit" id="submitGeneratePipeline" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="menu-config" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px" data-menu-height="600" data-menu-width="700">
  <div class="menu-title mt-n1">
    <h1>Parameter Configuration</h1>
    <p class="color-highlight">Add Environment and pipeline.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('generatepipeline.store') }}" method="post">
      @csrf
      <input type="hidden" name="id_cp" id="id_cp">
      
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
        </div>
        <div class="clearfix mb-3"></div>
        <div data-bs-parent="#tab-group-4" class="collapse show" id="tab-1-cp">
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
      
        <div data-bs-parent="#tab-group-4" class="collapse" id="tab-2-cp">
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
      
      </div>
       <div class="row">
        <div class="col-12 text-center">
        <button type="submit" id="submitGeneratePipeline" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
        </div>
      </div> 
    </form>
  </div>
</div>

@endpush

@push('scripts')
<script>
      function addConfig(){
        $('#addEnvironmentandPipeline').html('');

        let kmrange = $('#kmrange').val();
        document.getElementById("kmRange").value = kmrange;
        let j = 1;


        if(kmrange > 0){
          for(let i = 0; i<kmrange ; i++){
            $('#addEnvironmentandPipeline').append(`
                  
                  <tr>
                    <th scope="row">${j}</th>
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
            j++;
          }
        }else{
          $('#addEnvironmentandPipeline').append(`
          <tr>
            <th colspan="3" scope="row">Please Enter Kilometer Range First!</th>
          </tr>
          `)
        }
      }

      function configPipeline(id_cp){
        $('#envParamList').html('');
        $('#pipeParamList').html('');
        
        document.getElementById("id_cp").value = id_cp;
        fetchEnv(id_cp);
        fetchPipe(id_cp);

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
            results.map(a => {
              a.forEach(el => {
                $('#envParamList').append(`
                <tr>
                  <th scope="row">${el.terrain.name}</th>
                  <td scope="row">${el.name}</td>
                  <td scope="row">
                  <input type="text" class="form-control" id="value-${el.id}" name="value"">
                  </td>

                </tr>
              `)
              });
              

              
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
            results.configPipeline.map(b =>{
              
            })
            results.data.map(a => {
              a.forEach(el => {
                $('#pipeParamList').append(`
                <tr>
                  <th scope="row">${el.pipeline.name}</th>
                  <td scope="row">${el.name}</td>
                  <td scope="row">
                  <input type="text" class="form-control" id="value-${el.id}" name="value"">
                  </td>

                </tr>
              `)
              });
              
            })
          },
          error: err => console.error(err)
        })
      }

</script>
@endpush
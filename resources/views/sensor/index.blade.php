
<div id="sensor"></div>
<h4 class="text-center mt-2 mb-3">SENSOR</h4>

<div class="content m-1" id="tab-group-3">

  <table class="h-100 w-100" style="background-color:transparent !important;border:none">
    <tr>
      <td style="background-color:transparent !important;">
        <div class="input-style has-borders no-icon mb-4 input-style-active">
          <label for="selectSensor" class="color-highlight">Select sensor</label>
          <select id="selectSensor">
            <option value="default" disabled="" selected="">Select sensor</option>
            @if(count($sensors) > 0)
              @foreach ($sensors as $sensor)
                <option value="{{$sensor->id}}">{{$sensor->name}}</option>       
              @endforeach
            @endif
          </select>
          <span><i class="fa fa-chevron-down"></i></span>
        </div>
      </td>
      <td class="text-center" style="background-color:transparent !important;width:20px">
        <a id="btn-sensor-config" data-menu="menu-add-sensor" href="#" style="color:unset">
          <i class="fas fa-cog ps-1 mb-3 fa-lg"></i>
        </a>
      </td>
    </tr>
  </table>

  <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
    <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-sensor">Parameters</a>
    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-sensor">List of Sensors</a>
  </div>
  <div class="clearfix mb-3"></div>
  <div data-bs-parent="#tab-group-3" class="collapse show" id="tab-1-sensor">
    <div class="content mb-0">
      <div class="row mb-2">
        <div class="col-8">
          <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Parameters List</h4>
        </div>
        <div class="col-4" style="text-align:right">
          <a href="#" data-menu="menu-add-sensor-parameter"
            class="icon icon-xs rounded-sm shadow-l me-1 bg-highlight"><i class="fas fa-plus"></i></a>
        </div>
      </div>

      <div id="sensorParameterList">
        <br>
        <p class="text-center">Please select sensor first to view respective Parameter.</p>
        <br>
      </div>

      <div class="divider"></div>
    </div>
  </div>

  <div data-bs-parent="#tab-group-3" class="collapse" id="tab-2-sensor">
    
  </div>

</div>


@push('content2')

<div id="menu-add-sensor" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px" data-menu-height="600" data-menu-width="500">
  <div class="menu-title mt-n1">
    <h1>Add Sensor</h1>
    <p class="color-highlight">Add Sensor to the list.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('sensor.store') }}" method="post">
      @csrf
      <div class="input-style input-style-always-active has-borders mb-4">
        <input name="name" id="name" class="form-control" placeholder="Enter sensor name" required>
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Sensor Name</label>
        <em>(required)</em>
      </div>

      <div class="input-style input-style-always-active has-borders mb-4">
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"
          placeholder="Enter sensor description"></textarea>
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Sensor Description</label>
      </div>

      <div class="row">
        <div class="col-12 text-center">

        <button type="submit" id="submitSensor" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
        </div>
      </div>
    </form>


    <div class="card card-style">
      <div class="content mb-2" style="height: 260px;overflow-y: scroll;">
        <h3 class="mb-2">List of Sensor</h3>
        <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
          <thead>
            <tr>
              <th scope="col" class="bg-dark-dark border-dark-dark color-white">Sensor</th>
              <th scope="col" class="bg-dark-dark border-dark-dark color-white">Description</th>
              <th scope="col" class="bg-dark-dark border-dark-dark color-white">Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach($sensors as $sensor)
           <tr class="bg-dark-light">
            <th scope="row">{{$sensor->name}}</th>
              <td>{{$sensor->description}}</td>
              <td>
              <a class="deleteTerrain" data-idterrain="{{$sensor->id}}" href="#"><i class="far fa-edit color-yellow-dark"></i></a>
              &nbsp;&nbsp;&nbsp;
              <a class="deleteTerrain" data-idterrain="{{$sensor->id}}" href="#"><i class="far fa-trash-alt color-red-dark"></i></a>
              </td>
          </tr>
           @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>


<div id="menu-add-sensor-parameter" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="360"
  data-menu-width="500">
  <div class="menu-title mt-n1">
    <h1>Add Sensor Parameter</h1>
    <p class="color-highlight selected-sensor">Add sensor parameter to the list.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form action="{{ route('sensorParam.store') }}" method="post">
      @csrf

      <input type="hidden" id="idSensor" class="idSensor" name="idSensor">

      <div class="input-style input-style-always-active has-borders mb-4">
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Parameter Name</label>
        <input name="sensorParameterName" id="sensorParameterName"  type="text" class="form-control" placeholder="Enter parameter name" required>
        <em>(required)</em>
      </div>

      <div class="input-style input-style-always-active has-borders mb-4">
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Select Parameter Type</label>
        <select id="sensorParameterType" name="sensorParameterType" val="" required>
          <option value="default" disabled="" selected="">Select a paramater type</option>
          <option value="integer">Integer</option>
          <option value="decimal">Decimal</option>
          <option value="string">String</option>
        </select>
        <em>(required)</em>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="d-flex no-effect collapsed" data-trigger-switch="sensorParameterRequired"
            data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false"
            aria-controls="collapseExample2">
            <div class="pt-1 ps-2">
              <h5 class="font-600">Required ?</h5>
            </div>
            <div class="ms-auto me-4 pe-2 pt-2">
              <div class="custom-control ios-switch ios-switch-icon" style="margin-top:0px !important">
                <input type="checkbox" name="sensorParameterRequired" id="sensorParameterRequired"  class="ios-input" id="sensorParameterRequired">
                <label class="custom-control-label" for="sensorParameterRequired"></label>
                <i class="fa fa-check font-11 color-white"></i>
                <i class="fa fa-times font-11 color-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <button type="submit" id="submitParamSensor" class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
          {{--  <a href="#" id="add-sensor-param"
            class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
              class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>  --}}
        </div>
      </div>
    </form>
  </div>
</div>

<div id="menu-delete-sensor" class="menu menu-box-modal rounded-m" data-menu-width="310" data-menu-height="270">
  <div class="text-center"><i class="fal fa-times-circle color-red-light mt-4" style="font-size: 45px;"></i></div>
  <h1 class="text-center mt-3">Are You Sure?</h1>
  <p class="ps-3 pe-3 text-center color-theme opacity-60">
      Do you realy want to delete the record ? This action cannot be undone.
  </p>
  <form class="needs-validation" novalidate id="deleteSensorForm">
      <input type="hidden" name="idSensorDelete" id="idSensorDelete">
      <a href="#" id="delete-sensor"
          class="btn btn-m font-900 text-uppercase bg-highlight rounded-sm btn-center-l">Confirm</a>
  </form>
</div>

@endpush

@push('scripts')
    <script>
    $(document).ready(function(){
      $("#submitSensor").change(function(e){
        e.preventDefault()
      })
      $("#submitParamSensor").change(function(e){
        e.preventDefault()
      })

      $("#selectSensor").change(function(){
        let idSensor = this.value;
        document.getElementById('idSensor').value = idSensor;
        getSensorParam(idSensor);
      })
    })
    
    function getSensorParam(idSensor){

      let listParams = document.getElementById("sensorParameterList");

       $.ajax({
          url:"{{ route('sensorParam.fetch') }}",
          method:"POST",
          data:{
              idSensor
          },
          headers: {
              'X-CSRF-TOKEN': "{{ csrf_token() }}"
          },
          success: (resultsJSON) =>{
            let results = JSON.parse(resultsJSON);
            if(results.status == 'success'){
              
              if (results.data){
                  if (results.data.length) {
                      $('#sensorParameterList').html('');

                      results.data.map(a => {

                          $('#sensorParameterList').append(`
                              <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">

                                  <div class="align-self-center">
                                  <h1 class="mb-n2 font-16">${a.name}</h1>
                                  <p class="font-11 opacity-60">${a.required === 1 ? 'required' : 'optional'}</p>
                                  </div>
                                  <div class="align-self-center ms-auto text-end">
                                  <h2 class="mb-n1 font-18 color-highlight">${a.type}</h2>
              
                                  </div>
                              </a>
                          `)
                      })

                  }
                  else{
                      $('#sensorParameterList').html('');

                      $('#sensorParameterList').append(`
                      <br>
                      <p class="text-center">Parameter is empty. To add click on the plus button. To view other parameter, please select other Environment</p>
                      <br>
                      `);
                  }
              }
              else
              {
                  $('#sensorParameterList').html('');

                  $('#sensorParameterList').append(`
                      
                  `);
              }

          }
          else{
              if(results.type == 'Validation Error'){
                  validationErrorBuilder(results);
              }
              else{
                  snackbar(results.status , results.message)
              }
          }
            
          },
          error: err => console.error(err)
        })
    }
    </script>
@endpush
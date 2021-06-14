{{--  <form action="{{ route('sensor.store') }}" method="post">
  @csrf
  <div class="row">
    <div class="col-md-12">
      <h4>Add New Sensor</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <table class="table table-bordered table-responsive  table-hover" id="dynamic_table" >
          <tr>
            <td colspan="2">
              <i name="add1" id="add1" class="fa fa-plus-circle"
                style="font-size:17px; cursor:pointer; color:green"></i> Add new atrributes
            </td>
          </tr>
        <tr>
          <td>Name of Sensor</td>
          <td>
            <input type="text" name="name" id="name" class="form-control"
            value="{{old('name') ? old('name') : ''}}">
          </td>
        </tr>
        <tr>
          <td>Type of Sensor</td>
          <td>
            <input type="text" name="sensor_type" id="sensor_type" class="form-control"
            value="{{old('sensor_type') ? old('sensor_type') : ''}}">
          </td>
        </tr>
        <tr>
          <td>Latitude</td>
          <td>
            <input type="text" name="latitude" id="latitude" class="form-control"
            value="{{old('latitude') ? old('latitude') : ''}}">
          </td>
        </tr>
        <tr>
          <td>Longitude</td>
          <td>
            <input type="text" name="longitude" id="longitude" class="form-control"
            value="{{old('longitude') ? old('longitude') : ''}}">
          </td>
        </tr>
        <tr id="row_desc">
          <td>Description</td>
          <td>
            <input type="text" name="description" id="description" class="form-control"
            value="{{old('description') ? old('description') : ''}}">
          </td>
        </tr>
        
        </table>
        <input type="hidden" id="no_attribute" name="no_attribute">
        <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i></button>
      </div>
    </div>
  </div>
</form>
@push('scripts')
<script>
  $(document).ready(function() {

    var i=0;
      $('#add1').click(function(e){
        e.preventDefault()
        i++;
        $('#dynamic_table').append(`<tr id="row_desc${i}">
          <td><input type="text" name="name_att${i}" id="name_att${i}" class="form-control"
            value="{{old('name_att${i}') ? old('name_att${i}') : ''}}"></td>
          <td>
            <input type="text" name="value_att${i}" id="value_att${i}" class="form-control"
            value="{{old('value_att${i}') ? old('value_att${i}') : ''}}">
          </td>
        </tr>`);

        document.getElementById('no_attribute').value = i;
      });

  })
</script>
@endpush  --}}
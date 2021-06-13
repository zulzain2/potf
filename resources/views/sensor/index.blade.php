<div class="row">
  <div class="col-md-12">
    <h4>List of Sensors</h4>
  </div>
</div>
@foreach($sensor as $sensor)
<div class="widget lazur-bg p-xl">
<hr style="color:#00A19C">
  <h2>
      {{$sensor->name}}
  </h2>
  <span>
    {{$sensor->description}}
  </span>
<ul class="list-unstyled m-t-md">
  @foreach($sensor->params as $data)
    <li>
      <span class="fa fa-hand-point-right m-r-xs"></span>
      <label>{{$data->params}}</label>
       = {{$data->value}}
    </li>
  @endforeach
</ul>

</div>
<hr style="color:#00A19C">

@endforeach
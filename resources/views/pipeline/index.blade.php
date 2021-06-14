<div id="pipeline"></div>
<h4 class="text-center mt-2 mb-3">PIPELINE</h4>

<div class="content m-1" id="tab-group-2">

  <table class="h-100 w-100" style="background-color:transparent !important;border:none">
    <tr>
      <td style="background-color:transparent !important;">
        <div class="input-style has-borders no-icon mb-4 input-style-active">
          <label for="selectPipeline" class="color-highlight">Select a pipeline</label>
          <select id="selectPipeline">
            <option value="default" disabled="" selected="">Select a pipeline</option>
          </select>
          <span><i class="fa fa-chevron-down"></i></span>
        </div>
      </td>
      <td class="text-center" style="background-color:transparent !important;width:20px">
        <a id="btn-pipeline-config" data-menu="menu-add-pipeline" href="#" style="color:unset">
          <i class="fas fa-cog ps-1 mb-3 fa-lg"></i>
        </a>
      </td>
    </tr>
  </table>

  <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
    <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-pipe">Parameters</a>
    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-pipe">Simulation Models</a>
  </div>
  <div class="clearfix mb-3"></div>
  <div data-bs-parent="#tab-group-2" class="collapse show" id="tab-1-pipe">
    <div class="content mb-0">
      <div class="row mb-2">
        <div class="col-8">
          <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Parameters List</h4>
        </div>
        <div class="col-4" style="text-align:right">
          <a href="#" data-menu="menu-add-pipeline-parameter"
            class="icon icon-xs rounded-sm shadow-l me-1 bg-highlight"><i class="fas fa-plus"></i></a>
        </div>
      </div>

      <div id="pipelineParameterList">
        <br>
        <p class="text-center">Please select pipeline first to view respective Parameter.</p>
        <br>
      </div>

      <div class="divider"></div>
    </div>
  </div>
  <div data-bs-parent="#tab-group-2" class="collapse" id="tab-2-pipe">
    <div class="content mb-0">
      <div class="row mb-2">
        <div class="col-8">
          <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Simulation Models List</h4>
        </div>
        <div class="col-4" style="text-align:right">
          <a href="#" data-menu="menu-add-pipeline-simulation"
            class="icon icon-xs rounded-sm shadow-l me-1 bg-highlight"><i class="fas fa-plus"></i></a>
        </div>
      </div>

      <div id="pipelineSimulationList">
        <br>
        <p class="text-center">Please select pipeline first to view respective Simulation.</p>
        <br>
      </div>

      <div class="divider"></div>
    </div>
  </div>
</div>


@section('content2')


<div id="menu-add-pipeline" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="400" data-menu-width="500">
  <div class="menu-title mt-n1">
    <h1>Add Pipeline</h1>
    <p class="color-highlight">Add pipeline to the list.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form class="needs-validation" id="addPipelineForm" novalidate>
      <div class="input-style input-style-always-active has-borders mb-4">
        <input id="pipelineName" type="name" class="form-control" placeholder="Enter pipeline name" required>
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Pipeline Name</label>
        <em>(required)</em>
      </div>

      <div class="input-style input-style-always-active has-borders mb-4">
        <textarea name="pipelineDesc" class="form-control" id="pipelineDesc" cols="30" rows="10"
          placeholder="Enter pipeline description"></textarea>
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Pipeline Description</label>
      </div>

      <div class="row">
        <div class="col-12 text-center">

          <a href="#" id="add-pipeline"
            class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
              class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="menu-add-pipeline-parameter" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="360" data-menu-width="500">
  <div class="menu-title mt-n1">
    <h1>Add Pipeline Parameter</h1>
    <p class="color-highlight selected-pipeline">Add pipeline parameter to the list.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form class="needs-validation" id="addPipelineParamForm" novalidate>

      <input type="hidden" id="idPipeline" class="idPipeline" name="idPipeline">

      <div class="input-style input-style-always-active has-borders mb-4">
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Parameter Name</label>
        <input id="pipelineParameterName" type="text" class="form-control" placeholder="Enter parameter name" required>
        <em>(required)</em>
      </div>

      <div class="input-style input-style-always-active has-borders mb-4">
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Select Parameter Type</label>
        <select id="pipelineParameterType" name="pipelineParameterType" val="" required>
          <option value="default" disabled="" selected="">Select a paramater type</option>
          <option value="integer">Integer</option>
          <option value="decimal">Decimal</option>
          <option value="string">String</option>
        </select>
        <em>(required)</em>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="d-flex no-effect collapsed" data-trigger-switch="pipelineParameterRequired" data-bs-toggle="collapse"
          href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
          <div class="pt-1 ps-2">
            <h5 class="font-600">Required ?</h5>
          </div>
          <div class="ms-auto me-4 pe-2 pt-2">
            <div class="custom-control ios-switch ios-switch-icon" style="margin-top:0px !important">
              <input type="checkbox" class="ios-input" id="pipelineParameterRequired">
              <label class="custom-control-label" for="pipelineParameterRequired"></label>
              <i class="fa fa-check font-11 color-white"></i>
              <i class="fa fa-times font-11 color-white"></i>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 text-center">

          <a href="#" id="add-pipeline-param"
            class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
              class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>
        </div>
      </div>
    </form>
  </div>
</div>


<div id="menu-add-pipeline-simulation" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="380" data-menu-width="500">
  <div class="menu-title mt-n1">
    <h1>Add Pipeline Simulation Model</h1>
    <p class="color-highlight selected-pipeline">Add simulation model to the list.</p>
    <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
  </div>
  <div class="content mt-2">
    <div class="divider mb-3"></div>
    <form class="needs-validation" id="addPipelineSimulationForm" novalidate>

      <input type="hidden" id="idPipeline4Simulation" class="idPipeline" name="idPipeline4Simulation">

      <div class="input-style input-style-always-active has-borders mb-4">
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Simulation Model Name</label>
        <input id="pipelineSimulationName" type="text" class="form-control" placeholder="Enter simulation model name" required>
        <em>(required)</em>
      </div>

      <div class="input-style input-style-always-active has-borders mb-4">
        <textarea name="pipelineSimulationDesc" class="form-control" id="pipelineSimulationDesc" cols="30" rows="10"
          placeholder="Enter simulation model description"></textarea>
        <label class="color-theme opacity-50 text-uppercase font-700 font-10">Simulation Model Description</label>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <a href="#" id="add-pipeline-simulation"
            class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
              class="fas fa-plus"></i>&nbsp;&nbsp;Add</a>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
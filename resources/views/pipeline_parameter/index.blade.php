<div id="pipeline_parameter"></div>
<div class="content mb-0">
    <div class="row mb-2">
      <div class="col-8">
        <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Parameter List</h4>
      </div>
      <div class="col-4" style="text-align:right">
        <a href="#" id="btn-menu-add-pipeline-parameter" class="btn btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s bg-highlight">ADD</a>
      </div>
    </div>

    <div id="pipelineParameterList" style="height: 55vh;overflow-y: scroll;">
      <br>
      <p class="text-center">Please select pipeline first to view respective Parameter.</p>
      <br>
    </div>

    <div class="divider"></div>
  </div>

  @push('content2')

  <div id="menu-add-pipeline-parameter" class="menu menu-box-modal menu-box-detached rounded-m" data-menu-height="500" data-menu-width="500" style="max-height:500px">
    <div class="menu-title mt-n1">
      <h1>Add Pipeline Parameter</h1>
      <p class="color-highlight selected-pipeline"></p>
      <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
    </div>
    <div class="content mt-2">
      <div class="divider mb-3"></div>
      <form class="needs-validation" id="addPipelineParamForm" novalidate>
  
        <input type="hidden" id="idPipeline" class="idPipeline" name="idPipeline">
  
        <div class="input-style input-style-always-active has-borders mb-4">
          <label class="color-theme opacity-50 text-uppercase font-700 font-10">Parameter Name</label>
          <input id="pipelineParameterName" name="pipelineParameterName" type="text" class="form-control" placeholder="Enter parameter name" required>
          <em>(required)</em>
        </div>
  
        <div class="input-style input-style-always-active has-borders mb-4">
          <textarea id="pipelineParameterDesc" name="pipelineParameterDesc" style="height:unset !important" class="form-control" cols="30" rows="5" placeholder="Enter parameter description"></textarea>
          <label class="color-theme opacity-50 text-uppercase font-700 font-10">Parameter Description</label>
        </div>
  
        <div class="input-style input-style-always-active has-borders mb-4">
          <label class="color-theme opacity-50 text-uppercase font-700 font-10">Select Parameter Type</label>
          <select id="pipelineParameterType" name="pipelineParameterType" val="" required>
            <option value="" disabled="" selected="">Select a paramater type</option>
            <option value="integer">Integer</option>
            <option value="decimal">Decimal</option>
            <option value="float">Float</option>
          </select>
          <em>(required)</em>
        </div>
  
        <div class="row d-none">
          <div class="col-12">
            <div class="d-flex no-effect collapsed" data-trigger-switch="pipelineParameterRequired" data-bs-toggle="collapse"
            href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
            <div class="pt-1 ps-2">
              <h5 class="font-600">Optional ?</h5>
            </div>
            <div class="ms-auto me-4 pe-2 pt-2">
              <div class="custom-control ios-switch ios-switch-icon" style="margin-top:0px !important">
                <input type="checkbox" class="ios-input" id="pipelineParameterRequired" name="pipelineParameterRequired">
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
  
            <button type="submit" id="add-pipeline-param"
              class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
                class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>  

  <div id="menu-pipeline-parameter" class="col-4 menu menu-box-bottom rounded-0" data-menu-effect="menu-over" data-menu-height="250" style="padding-left: 70px;background-color: transparent !important;">
    <div class="card card-style me-2 border-highlight" style="overflow: scroll;margin: 0;border-radius: 0px;height: 250px;border-top-style: groove !important;border-top-width: 13px !important;">
      <div class="content me-1 ms-1 h-100">
        <div class="menu-title mt-n1">
          <a href="#" class="close-menu color-invert" style="line-height:55px !important"><i class="fa fa-times font-14"></i></a>
        </div>
        <div id="content-menu-pipeline-parameter" class="content mt-0 h-100">
        </div>
      </div>
    </div>
  </div>
  @endpush
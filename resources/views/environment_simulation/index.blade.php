<div id="environment_simulation"></div>
<div class="content mb-0">
    <div class="row mb-2">
      <div class="col-8">
        <h4 class="font-700 text-uppercase font-12 opacity-30 mb-1 mt-2">Simulation Model List</h4>
      </div>
      <div class="col-4" style="text-align:right">
        {{-- <a href="#" id="btn-menu-add-terrain-simulation" class="icon icon-xs rounded-sm shadow-l me-1 bg-highlight"><i
            class="fas fa-plus"></i></a> --}}
            <a href="#" id="btn-menu-add-terrain-simulation" class="btn btn-m btn-full mb-3 rounded-xl text-uppercase font-900 shadow-s bg-highlight">ADD</a>
      </div>
    </div>

    <div id="terrainSimulationList" style="height: 55vh;overflow-y: scroll;">
      <br>
      <p class="text-center">Please select environment first to view respective Simulation.</p>
      <br>
    </div>
  </div>


@push('content2')

    <div id="menu-add-terrain-simulation" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px"
        data-menu-height="600" data-menu-width="700">
        <div class="menu-title mt-n1">
        <h1>Add Environment Simulation Model</h1>
        <p class="color-highlight selected-terrain"></p>
        <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
        </div>
        <div class="content mt-2">
        <div class="divider mb-3"></div>
        <form class="needs-validation" id="addTerrainSimulationForm" novalidate>

            <input type="hidden" id="idTerrain4Simulation" class="idTerrain" name="idTerrain4Simulation">

            <div class="input-style input-style-always-active has-borders mb-4">
            <label class="color-theme opacity-50 text-uppercase font-700 font-10">Simulation Model Name</label>
            <input id="terrainSimulationName" name="terrainSimulationName" type="text" class="form-control"
                placeholder="Enter simulation model name" required>
            <em>(required)</em>
            </div>

            <div class="input-style input-style-always-active has-borders mb-4">
            <textarea id="terrainSimulationDesc" name="terrainSimulationDesc" class="form-control"
                style="height:unset !important" cols="30" rows="5"
                placeholder="Enter simulation model description"></textarea>
            <label class="color-theme opacity-50 text-uppercase font-700 font-10">Simulation Model Description</label>
            </div>

            <h6 class="text-center mb-1">Formula Builder</h6>
            <p class="mt-n2 mb-4 text-center">
            To see for all available function, click <a href="formula" target="_blank"
                class="color-blue-dark font-800">here</a>. You need to build your formula based on the available function
            only.
            </p>

            <div class="row text-center mb-2">

            <div class="col-12">
                <strong>Available Parameter</strong> <br>
                <div id="terrainFormulaParameter" class="row mb-2">

                </div>
            </div>
            </div>

            <div class="input-style has-icon input-style-always-active has-borders mb-0"
            style="margin-bottom:0px !important">
            <i class="fas fa-equals color-highlight"></i>
            <label class="color-theme opacity-50 text-uppercase font-700 font-10">Formula</label>
            <textarea id="terrainSimulationFormula" name="terrainSimulationFormula" class="form-control"
                style="height:unset !important" cols="30" rows="5" placeholder="Input formula here" required></textarea>
            <em>(required)</em>
            </div>

            <div class="text-center">
            <table class="w-100 mt-2">
                <tr>
                <td>
                    <strong>Example</strong>
                </td>
                </tr>
                <tr>
                <td>
                    Lets say you have this formula with Parameter <strong>X</strong>.
                    <br>
                    <img src="images/formula/formula1.png" style="width:200px" class="mt-1" alt="">
                </td>
                </tr>
                <tr>
                <td>
                    CONVERT TO PROVIDED FUNCTION
                </td>
                </tr>
                <tr>
                <td>
                    <i class="fas fa-arrow-down"></i>
                </td>
                </tr>
                <tr>
                <td>
                    <p class="w-100 color-invert">= SQRT(<strong
                        class="color-highlight">@{{ PARAM_X }})</strong>+(9*POWER(POWER(<strong
                        class="color-highlight">@{{ PARAM_X }}</strong>,7) , 1/3))-(2/(POWER(POWER(<strong
                        class="color-highlight">@{{ PARAM_X }}</strong>,2),1/5)))</p>
                </td>
                </tr>

            </table>


            <br>
            <strong class="w-100">Full list of function <a href="formula" target="_blank"
                class="color-blue-dark font-800">here</a></strong>
            </div>

            <br>

            <div class="divider mb-3"></div>

            <div class="row">
            <div class="col-12 text-center">
                <button type="submit" id="add-terrain-simulation"
                class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
                    class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
            </div>
            </div>
        </form>
        </div>
    </div>
  
    <div id="menu-terrain-simulation" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px;z-index:102"
        data-menu-height="450" data-menu-width="700">
        <div class="menu-title mt-n1">
            <h1>Environment Simulation</h1>
            <p class="color-highlight">Details of environment simulation.</p>
            <a href="#" id="closeMenuTerrainSimulation" class="close-menu"><i class="fa fa-times"></i></a>
        </div>
        <div class="content mt-2">
            <div class="divider mb-3"></div>
            <div id="content-menu-terrain-simulation">

            </div>
        </div>
    </div>

    <div id="menu-terrain-simulation-bottom" class="col-4 menu menu-box-bottom rounded-0" data-menu-effect="menu-over" data-menu-height="250" style="padding-left: 70px;background-color: transparent !important;">
        <div class="card card-style me-2 border-highlight" style="overflow: scroll;margin: 0;border-radius: 0px;height: 250px;border-top-style: groove !important;border-top-width: 13px !important;z-index:99">
          <div class="content me-1 ms-1 h-100">
            <div class="menu-title mt-n1">
              <a href="#" class="close-menu color-invert" style="line-height:55px !important"><i class="fa fa-times font-14"></i></a>
            </div>
            <div id="content-menu-terrain-simulation-bottom" class="content mt-0 h-100">
            </div>
          </div>
        </div>
      </div>
@endpush
<div id="environment"></div>
<h4 class="text-center mt-2 mb-3">ENVIRONMENT</h4>

<div class="content m-1" id="tab-group-1">

  <table class="h-100 w-100" style="background-color:transparent !important;border:none">
    <tr>
      <td style="background-color:transparent !important;">
        <div class="input-style has-borders no-icon mb-4 input-style-active">
          <label for="selectTerrain" class="color-highlight">Select An Environment</label>
          <select id="selectTerrain">
            <option value="default" disabled="" selected="">Select an environment</option>
          </select>
          <span><i class="fa fa-chevron-down"></i></span>
        </div>
      </td>
      <td class="text-center" style="background-color:transparent !important;width:20px">
        <a id="btn-terrain-config" data-menu="menu-add-terrain" href="#" style="color:unset">
          <i class="fas fa-cog ps-1 mb-3 fa-lg"></i>
        </a>
      </td>
    </tr>
  </table>

  <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
    <a href="#" data-active="" data-bs-toggle="collapse" data-bs-target="#tab-1-terrain">Parameter</a>
    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2-terrain">Simulation Model</a>
  </div>

  <div class="clearfix mb-3"></div>

  <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1-terrain">

    @include('environment_parameter.index')

  </div>

  <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2-terrain">

    @include('environment_simulation.index')

  </div>

</div>


@push('content2')

  <div id="menu-add-terrain" class="menu menu-box-modal menu-box-detached rounded-m" style="max-height:600px"
    data-menu-height="600" data-menu-width="500">
    <div class="menu-title mt-n1">
      <h1>Add Environment</h1>
      <p class="color-highlight">Add Environment to the list.</p>
      <a href="#" class="close-menu"><i class="fa fa-times"></i></a>
    </div>
    <div class="content mt-2">
      <div class="divider mb-3"></div>
      <form class="needs-validation" id="addTerrainForm" novalidate>
        <div class="input-style input-style-always-active has-borders mb-4">
          <input id="terrainName" name="terrainName" type="name" class="form-control"
            placeholder="Enter environment name" required>
          <label class="color-theme opacity-50 text-uppercase font-700 font-10">Environment Name</label>
          <em>(required)</em>
        </div>

        <div class="input-style input-style-always-active has-borders mb-4">
          <textarea id="terrainDesc" name="terrainDesc" style="height:unset !important" class="form-control" cols="30"
            rows="5" placeholder="Enter environment description"></textarea>
          <label class="color-theme opacity-50 text-uppercase font-700 font-10">Environment Description</label>
        </div>

        <div class="row">
          <div class="col-12 text-center">

            <button type="submit" id="add-terrain"
              class="btn btn-s rounded-s text-uppercase font-900 shadow-s border-highlight bg-highlight"><i
                class="fas fa-plus"></i>&nbsp;&nbsp;Add</button>
          </div>
        </div>
      </form>


      <div class="card card-style">
        <div class="content mb-2" style="height: 260px;overflow-y: scroll;">
          <h3 class="mb-2">List of Environment</h3>
          <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
            <thead>
              <tr>
                <th scope="col" class="bg-dark-dark border-dark-dark color-white">Environment</th>
                <th scope="col" class="bg-dark-dark border-dark-dark color-white">Description</th>
                <th scope="col" class="bg-dark-dark border-dark-dark color-white" style="width: 60px;">Action</th>
              </tr>
            </thead>
            <tbody id="tbl-terrain">


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <div id="menu-delete-terrain" class="menu menu-box-modal rounded-m" data-menu-width="310" data-menu-height="270">
    <div class="text-center"><i class="fal fa-times-circle color-red-light mt-4" style="font-size: 45px;"></i></div>
    <h1 class="text-center mt-3">Are You Sure?</h1>
    <p class="ps-3 pe-3 text-center color-theme opacity-60">
      Do you realy want to delete the record ? This action cannot be undone.
    </p>
    <form class="needs-validation" novalidate id="deleteTerrainForm">
      <input type="hidden" name="idTerrainDelete" id="idTerrainDelete">
      <button type="submit" id="delete-terrain"
        class="btn btn-m font-900 text-uppercase bg-highlight rounded-sm btn-center-l">Confirm</button>
    </form>
  </div>



@endpush
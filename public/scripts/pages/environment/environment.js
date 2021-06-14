function getAllTerrain(){
    fetch('/terrain').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {

                    if (document.querySelector('#selectTerrain')) {
                        $('#selectTerrain').html('');

                        $('#selectTerrain').append(`
                            <option value="default" disabled="" selected="">Select an Environment</option>
                        `);
    
                        results.data.map(terrain => {
    
                            $('#selectTerrain').append(`
                                <option value="${terrain.id}">${terrain.name}</option>
                            `)
                        })
                    }

                    if (document.querySelector('#tbl-terrain')) {
                        $('#tbl-terrain').html('');

                        results.data.map(terrain => {
                            $('#tbl-terrain').append(`
                            <tr class="bg-dark-light">
                            <th scope="row">${terrain.name}</th>
                            <td>${terrain.desc ? terrain.desc : ''}</td>
                            <td>
                            <a class="deleteTerrain" data-idterrain="${terrain.id}" href="#"><i class="far fa-trash-alt color-red-dark"></i></a>
                            </td>
                            </tr>
                        `);
                        });

                        $('.deleteTerrain').on('click' , function() {
                            let idTerrain = $(this).data('idterrain');
                            $('#idTerrainDelete').val(idTerrain);
                            menu('menu-delete-terrain', 'show', 250);
                        })

                    }
                   

                }
                else{

                    if (document.querySelector('#selectTerrain')) {
                        $('#selectTerrain').html('');

                        $('#selectTerrain').append(`
                        <option value="default" disabled="" selected="">Select an Environment</option>
                        `);

                        $('#tbl-terrain').html('');
                    }
                   
                }
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
    
    }).catch(function(err) {
        console.log('Error Get All Terrain: ' + err);
    });
}



function getTerrainParameter(idTerrain){

    $('#terrainParameterList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);
    

    fetch('/terrainparameter/'+idTerrain+'').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {
                    $('#terrainParameterList').html('');

                    results.data.map(terrainparam => {

                        $('#terrainParameterList').append(`
                            <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">

                                <div class="align-self-center">
                                <h1 class="mb-n2 font-16">${terrainparam.name}</h1>
                                <p class="font-11 opacity-60">${terrainparam.required === 1 ? 'required' : 'optional'}</p>
                                </div>
                                <div class="align-self-center ms-auto text-end">
                                <h2 class="mb-n1 font-18 color-highlight">${terrainparam.type}</h2>
            
                                </div>
                            </a>
                        `)
                    })

                }
                else{
                    $('#terrainParameterList').html('');

                    $('#terrainParameterList').append(`
                    <br>
                    <p class="text-center">Parameter is empty. To add click on the plus button. To view other parameter, please select other Environment</p>
                    <br>
                    `);
                }
            }
            else
            {
                $('#terrainParameterList').html('');

                $('#terrainParameterList').append(`
                    
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
    
    }).catch(function(err) {
        console.log('Error Get Terrain Parameter: ' + err);
    });
}


function getTerrainSimulation(idTerrain){

    $('#terrainSimulationList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);
    

    fetch('/terrainsimulator/'+idTerrain+'').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {
                    $('#terrainSimulationList').html('');

                    results.data.map(terrainsimulator => {

                        $('#terrainSimulationList').append(`
                            <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">

                                <div class="align-self-center">
                                <h1 class="mb-n2 font-16">${terrainsimulator.name}</h1>
                                </div>

                            </a>
                        `)
                    })

                }
                else{
                    $('#terrainSimulationList').html('');

                    $('#terrainSimulationList').append(`
                    <br>
                    <p class="text-center">Simulator is empty. To add click on the plus button. To view other simulators, please select other Environment</p>
                    <br>
                    `);
                }
            }
            else
            {
                $('#terrainSimulationList').html('');

                $('#terrainSimulationList').append(`
                    
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
    
    }).catch(function(err) {
        console.log('Error Get Terrain Simulators: ' + err);
    });
}




///////////////////////////////////////////////////////////////////////
// Select terrain dropdown
if (document.querySelector('#selectTerrain')) {

    //Initialize terrain dropdown
    getAllTerrain();

    //Event listener for terrain dropdown
    $('#selectTerrain').on('change' , () => {
        let val = $('#selectTerrain').val();
        $('.selected-terrain').html(val);
        $('.idTerrain').val(val);

        getTerrainParameter(val);
        getTerrainSimulation(val);
    })

}
///////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////
//for add terrain
$('#add-terrain').on('click' , function(event){

    if (navigator.onLine) {
        var form = $("#addTerrainForm");

         // Loop over them and prevent submission
         Array.prototype.slice.call(form)
         .forEach(function (form) {
            if (!form.checkValidity()) 
            {
              
       
                event.preventDefault()
                event.stopPropagation()
            }
            else
            {
                $('#add-terrain').addClass('off-btn').trigger('classChange');

                var terrainName = $('#terrainName').val();
                var terrainDesc = $('#terrainDesc').val();

                var dataForm = new URLSearchParams();
                dataForm.append('terrainName', terrainName);
                dataForm.append('terrainDesc', terrainDesc);

                fetch("terrain", {
                    method: 'post',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: dataForm,
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){

                        getAllTerrain();
                        
                        $('#add-terrain').removeClass('off-btn').trigger('classChange');

                        // menu('menu-add-terrain', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#terrainName').val('');
                        $('#terrainDesc').val('');

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-terrain').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Terrain: ' + err);
                });

                
            }

            form.classList.add('was-validated');
        });
    }
    else{
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//for add terrain parameter
$('#add-terrain-param').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#addTerrainParamForm");

         // Loop over them and prevent submission
         Array.prototype.slice.call(fsm)
         .forEach(function (form) {
            if (!form.checkValidity()) 
            {
                event.preventDefault()
                event.stopPropagation()
            }
            else
            {
                $('#add-terrain-param').addClass('off-btn').trigger('classChange');

                var idTerrain = $('#idTerrain').val();
                var terrainParameterName = $('#terrainParameterName').val();
                var terrainParameterType = $('#terrainParameterType').val();

                if ($('#terrainParameterRequired').is(":checked"))
                {
                    var terrainParameterRequired = 1;
                }
                else
                {
                    var terrainParameterRequired = 0;
                }

                var dataForm = new URLSearchParams();
                dataForm.append('idTerrain', idTerrain);
                dataForm.append('terrainParameterName', terrainParameterName);
                dataForm.append('terrainParameterType', terrainParameterType);
                dataForm.append('terrainParameterRequired', terrainParameterRequired);

                fetch("terrainparameter", {
                    method: 'post',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: dataForm,
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){
                        
                        $('#add-terrain-param').removeClass('off-btn').trigger('classChange');

                        menu('menu-add-terrain-parameter', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#terrainParameterName').val('');
                        $('#terrainParameterType').val('');

                        getTerrainParameter(idTerrain);
                        getTerrainSimulation(idTerrain);

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-terrain-param').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Terrain Parameter: ' + err);
                });

                
            }
            form.classList.add('was-validated');
        });
    }
    else{
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////
//for add terrain simulator model
$('#add-terrain-simulation').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#addTerrainSimulationForm");

         // Loop over them and prevent submission
         Array.prototype.slice.call(fsm)
         .forEach(function (form) {
            if (!form.checkValidity()) 
            {
                event.preventDefault()
                event.stopPropagation()
            }
            else
            {
                $('#add-terrain-simulation').addClass('off-btn').trigger('classChange');

                var idTerrain = $('#idTerrain4Simulation').val();
                var terrainSimulationName = $('#terrainSimulationName').val();
                var terrainSimulationDesc = $('#terrainSimulationDesc').val();

                var dataForm = new URLSearchParams();
                dataForm.append('idTerrain', idTerrain);
                dataForm.append('terrainSimulationName', terrainSimulationName);
                dataForm.append('terrainSimulationDesc', terrainSimulationDesc);

                fetch("terrainsimulator", {
                    method: 'post',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: dataForm,
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){
                        
                        $('#add-terrain-simulation').removeClass('off-btn').trigger('classChange');

                        menu('menu-add-terrain-simulation', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#terrainSimulationName').val('');
                        $('#terrainSimulationDesc').val('');

                        getTerrainSimulation(idTerrain);

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-terrain-simulation').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Terrain Simulation: ' + err);
                });

                
            }
            form.classList.add('was-validated');
        });
    }
    else{
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////
//for delete terrain
$('#delete-terrain').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#deleteTerrainForm");

        var formdata = new FormData();
        formdata.append("_method", "DELETE");

        // Loop over them and prevent submission
        Array.prototype.slice.call(fsm)
        .forEach(function (form) {
            if (!form.checkValidity()) 
            {
                event.preventDefault()
                event.stopPropagation()
            }
            else
            {
                $('#delete-terrain').addClass('off-btn').trigger('classChange');

                var deleteTerrainId = $('#idTerrainDelete').val();

                fetch("terrain/"+deleteTerrainId+"/", {
                    method: 'DELETE',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){


                        $('#delete-terrain').removeClass('off-btn').trigger('classChange');

                        menu('menu-delete-terrain', 'hide', 250);

                        snackbar(results.status , results.message)

                        getAllTerrain();

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#delete-terrain').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log(err);
                });

                
            }
            form.classList.add('was-validated');
        });
    }
    else{
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//Check if idTerrain already assign into the modal
$('#btn-menu-add-terrain-parameter').on('click' , function(){
    let idTerrain = $('#menu-add-terrain-parameter').find('.selected-terrain').html();
    console.log(idTerrain);
    if(idTerrain){
        menu('menu-add-terrain-parameter', 'show', 250);
    }else{
        snackbar('warning' , 'Please select environment first.')
    }
});
///////////////////////////////////////////////////////////////////////
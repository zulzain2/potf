function getAllPipeline(){
    fetch('/pipeline').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {

                    if (document.querySelector('#selectPipeline')) {
                        $('#selectPipeline').html('');

                        $('#selectPipeline').append(`
                            <option value="default" disabled="" selected="">Select a Pipeline</option>
                        `);

                        results.data.map(pipeline => {

                            $('#selectPipeline').append(`
                                <option value="${pipeline.id}">${pipeline.name}</option>
                            `)
                        })
                    }

                    if (document.querySelector('#tbl-pipeline')) {
                        $('#tbl-pipeline').html('');

                        results.data.map(pipeline => {
                            $('#tbl-pipeline').append(`
                            <tr class="bg-dark-light">
                            <th scope="row">${pipeline.name}</th>
                            <td>${pipeline.desc ? pipeline.desc : ''}</td>
                            <td>
                            <a class="deletePipeline" data-idpipeline="${pipeline.id}" href="#"><i class="far fa-trash-alt color-red-dark"></i></a>
                            </td>
                            </tr>
                        `);
                        });

                        $('.deletePipeline').on('click' , function() {
                            let idPipeline = $(this).data('idpipeline');
                            $('#idPipelineDelete').val(idPipeline);
                            menu('menu-delete-pipeline', 'show', 250);
                        })

                    }

                }
                else{
                    $('#selectPipeline').html('');

                    $('#selectPipeline').append(`
                    <option value="default" disabled="" selected="">Select a Pipeline</option>
                    `);

                    $('#tbl-pipeline').html('');
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
        console.log('Error Get All Pipeline: ' + err);
    });
}

function getPipelineParameter(idPipeline){

    $('#pipelineParameterList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);
    

    fetch('/pipelineparameter/'+idPipeline+'').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {
                    $('#pipelineParameterList').html('');

                    results.data.map(pipelineparam => {

                        $('#pipelineParameterList').append(`
                            <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">

                                <div class="align-self-center">
                                <h1 class="mb-n2 font-16">${pipelineparam.name}</h1>
                                <p class="font-11 opacity-60">${pipelineparam.required === 1 ? 'required' : 'optional'}</p>
                                </div>
                                <div class="align-self-center ms-auto text-end">
                                <h2 class="mb-n1 font-18 color-highlight">${pipelineparam.type}</h2>
            
                                </div>
                            </a>
                        `)
                    })

                }
                else{
                    $('#pipelineParameterList').html('');

                    $('#pipelineParameterList').append(`
                    <br>
                    <p class="text-center">Parameter is empty. To add click on the plus button. To view other parameter, please select other Pipeline</p>
                    <br>
                    `);
                }
            }
            else
            {
                $('#pipelineParameterList').html('');

                $('#pipelineParameterList').append(`
                    
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
        console.log('Error Get Pipeline Parameter: ' + err);
    });
}


function getPipelineSimulation(idPipeline){

    $('#pipelineSimulationList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);
    

    fetch('/pipelinesimulator/'+idPipeline+'').then(function(response) {
        return response.json();
    }).then(function(resultsJSON) {

        var results = resultsJSON

        if(results.status == 'success'){
            
            if (results.data){
                if (results.data.length) {
                    $('#pipelineSimulationList').html('');

                    results.data.map(pipelinesimulator => {

                        $('#pipelineSimulationList').append(`
                            <a href="#" data-menu="menu-transaction-1" class="d-flex mb-3">

                                <div class="align-self-center">
                                <h1 class="mb-n2 font-16">${pipelinesimulator.name}</h1>
                                </div>

                            </a>
                        `)
                    })

                }
                else{
                    $('#pipelineSimulationList').html('');

                    $('#pipelineSimulationList').append(`
                    <br>
                    <p class="text-center">Simulator is empty. To add click on the plus button. To view other simulators, please select other Pipeline</p>
                    <br>
                    `);
                }
            }
            else
            {
                $('#pipelineSimulationList').html('');

                $('#pipelineSimulationList').append(`
                    
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
        console.log('Error Get Pipeline Simulators: ' + err);
    });
}


///////////////////////////////////////////////////////////////////////
// Select pipeline dropdown
if (document.querySelector('#selectPipeline')) {

    //Initialize pipeline dropdown
    getAllPipeline();

    //Event listener for pipeline dropdown
    $('#selectPipeline').on('change' , () => {
        let val = $('#selectPipeline').val();
        $('.selected-pipeline').html(val);
        $('.idPipeline').val(val);

        getPipelineParameter(val);
        getPipelineSimulation(val);
    })


}
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//for add pipeline
$('#add-pipeline').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#addPipelineForm");

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
                $('#add-pipeline').addClass('off-btn').trigger('classChange');

                var pipelineName = $('#pipelineName').val();
                var pipelineDesc = $('#pipelineDesc').val();

                var dataForm = new URLSearchParams();
                dataForm.append('pipelineName', pipelineName);
                dataForm.append('pipelineDesc', pipelineDesc);

                fetch("pipeline", {
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

                        getAllPipeline();
                        
                        $('#add-pipeline').removeClass('off-btn').trigger('classChange');

                        // menu('menu-add-pipeline', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#pipelineName').val('');
                        $('#pipelineDesc').html('');

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-pipeline').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Pipeline: ' + err);
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
//for add pipeline parameter
$('#add-pipeline-param').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#addPipelineParamForm");

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
                $('#add-pipeline-param').addClass('off-btn').trigger('classChange');

                var idPipeline = $('#idPipeline').val();
                var pipelineParameterName = $('#pipelineParameterName').val();
                var pipelineParameterType = $('#pipelineParameterType').val();

                if ($('#pipelineParameterRequired').is(":checked"))
                {
                    var pipelineParameterRequired = 1;
                }
                else
                {
                    var pipelineParameterRequired = 0;
                }

                var dataForm = new URLSearchParams();
                dataForm.append('idPipeline', idPipeline);
                dataForm.append('pipelineParameterName', pipelineParameterName);
                dataForm.append('pipelineParameterType', pipelineParameterType);
                dataForm.append('pipelineParameterRequired', pipelineParameterRequired);

                fetch("pipelineparameter", {
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
                        
                        $('#add-pipeline-param').removeClass('off-btn').trigger('classChange');

                        menu('menu-add-pipeline-parameter', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#pipelineParameterName').val('');
                        $('#pipelineParameterType').val('');

                        getPipelineParameter(idPipeline);
                        getPipelineSimulation(idPipeline);

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-pipeline-param').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Pipeline Parameter: ' + err);
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
//for add pipeline simulator model
$('#add-pipeline-simulation').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#addPipelineSimulationForm");

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
                $('#add-pipeline-simulation').addClass('off-btn').trigger('classChange');

                var idPipeline = $('#idPipeline4Simulation').val();
                var pipelineSimulationName = $('#pipelineSimulationName').val();
                var pipelineSimulationDesc = $('#pipelineSimulationDesc').val();

                var dataForm = new URLSearchParams();
                dataForm.append('idPipeline', idPipeline);
                dataForm.append('pipelineSimulationName', pipelineSimulationName);
                dataForm.append('pipelineSimulationDesc', pipelineSimulationDesc);

                fetch("pipelinesimulator", {
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
                        
                        $('#add-pipeline-simulation').removeClass('off-btn').trigger('classChange');

                        menu('menu-add-pipeline-simulation', 'hide', 250);

                        snackbar(results.status , results.message)

                        $('#pipelineSimulationName').val('');
                        $('#pipelineSimulationDesc').val('');

                        getPipelineSimulation(idPipeline);

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#add-pipeline-simulation').removeClass('off-btn').trigger('classChange');

                            validationErrorBuilder(results);
                        }
                        else{
                            snackbar(results.status , results.message)
                        }
                    }

                })
                .catch(function(err) {
                    console.log('Error Add New Pipeline Simulation: ' + err);
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
//for delete pipeline
$('#delete-pipeline').on('click' , function(event){

    if (navigator.onLine) {
        var fsm = $("#deletePipelineForm");

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
                $('#delete-pipeline').addClass('off-btn').trigger('classChange');

                var deletePipelineId = $('#idPipelineDelete').val();

                fetch("pipeline/"+deletePipelineId+"/", {
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


                        $('#delete-pipeline').removeClass('off-btn').trigger('classChange');

                        menu('menu-delete-pipeline', 'hide', 250);

                        snackbar(results.status , results.message)

                        getAllPipeline();

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            $('#delete-pipeline').removeClass('off-btn').trigger('classChange');

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
//Check if idPipeline already assign into the modal
$('#btn-menu-add-pipeline-parameter').on('click' , function(){
    let idPipeline = $('#menu-add-pipeline-parameter').find('.selected-pipeline').html();
    console.log(idPipeline);
    if(idPipeline){
        menu('menu-add-pipeline-parameter', 'show', 250);
    }else{
        snackbar('warning' , 'Please select pipeline first.')
    }
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//Check if idTerrain already assign into the modal
$('#btn-menu-add-pipeline-simulation').on('click' , function(){
    let idPipeline = $('#menu-add-pipeline-simulation').find('.selected-pipeline').html();
    if(idPipeline){
        menu('menu-add-pipeline-simulation', 'show', 250);
    }else{
        snackbar('warning' , 'Please select pipeline first.')
    }
});
///////////////////////////////////////////////////////////////////////
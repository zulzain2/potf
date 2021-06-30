

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
                            <a href="#" class="open-menu-pipeline-simulation" data-id-pipeline-simulation="${pipelinesimulator.id}" class="d-flex mb-3">
                                <table style="width:100%;background-color:transparent !important;border:none;">
                                    <tr>
                                        <td style="background-color:transparent !important;width:70%">
                                            <div class="align-self-center">
                                                <h1 class=" font-16">${pipelinesimulator.name}</h1>
                                            </div>
                                        </td>
                                        <td style="background-color:transparent !important;text-align:right;width:30%">
                                            <small class="color-highlight">${moment(pipelinesimulator.created_at).format('MMMM Do')}</small>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                            <div class="divider mb-2 mt-2"></div>
                        `)
                    })

                    pipelineSimulationContentBuilder();

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
            } else{
                snackbar(results.status , results.message)
            }
        }
    
    }).catch(function(err) {
        console.log('Error Get Pipeline Simulators: ' + err);
    });
}

function pipelineSimulationContentBuilder(){
    $('.open-menu-pipeline-simulation').on('click' , function(){

        menu('menu-pipeline-simulation' , 'show' , 250);
        menu('menu-pipeline-simulation-bottom' , 'show' , 250)

        let idPipelineSimulation = $(this).data('idPipelineSimulation');

        fetch('/pipelinesimulatorcontent/'+idPipelineSimulation+'').then(function (response) {
            return response.json();
        }).then(function (resultsJSON) {
    
            var results = resultsJSON
    
            if (results.status == 'success') {

                if (results.data) {

                    $('#content-menu-pipeline-simulation').html('');

                        var html = `
                            <div class="card card-style mb-3">
                                <div class="content">
                                    <h3 class="text-center mb-0">${results.data.name}</h3>
                                    <p class="text-center mb-2">
                                    Added on - ${moment(results.data.created_at).format('MMMM Do')} 
                                    </p>
                                    <p class="text-center color-invert">
                                    ${results.data.desc ? results.data.desc : ''} 
                                    </p>
                                    <div class="row mb-0">
                                    <h3 class="text-center mb-3">Formula Functions</h3><h6 class="mb-3"><i class="fas fa-equals"></i>&nbsp;&nbsp;`;

                                    results.data.pipeline_simulator_formula.map(formula => {
                                    
                                        if(formula.pipeline_parameter){
                                            html += `<strong class="color-highlight">{{${formula.pipeline_parameter.name}}}</strong>`;
                                        }
                                        else{
                                            html += `${formula.id_pipeline_parameter}`;
                                        }
                                    });

                                    html += `</h6></div>
                                    </div>
                                </div>`;

                        $('#content-menu-pipeline-simulation').append(html);


                        var html = `
                        <table class="w-100" style="background-color:transparent !important;border:none;height:90% !important">
                            <tr>
                            <td class="align-top" style="background-color:transparent !important;height: 28%;">
                                <h4>${results.data.name}</h4>
                                <p class="color-highlight">${moment(results.data.created_at).format('MMMM Do')} </p>
                            </td>
                            </tr>
                            <tr>
                            <td class="align-middle" style="background-color:transparent !important">
                                <p>${results.data.desc ? results.data.desc : 'No description provided.'}</p>
                            </td>
                            </tr>
                        </table>
                        `;

                        $('#content-menu-pipeline-simulation-bottom').html(html);

                        $('#closeMenuPipelineSimulation').on('click' , function(){
         
                            menu('menu-pipeline-simulation-bottom' , 'show' , 250)
                        })


                } else {
                
                    $('#content-menu-pipeline-simulation').html('');

                    $('#content-menu-pipeline-simulation').append(`
                    
                    `);   

                }
                
            } else {
                $('#content-menu-pipeline-simulation').html('');

                $('#content-menu-pipeline-simulation').append(`
                
                `); 
            }
        }).catch(function (err) {
            console.log('Error Get Pipeline Simulators Content: ' + err);
        });

    });
}

function pipelineFormulaParameterBuilder(results){
    if (results.data){
        if (results.data.length) {
           
            $('#pipelineFormulaParameter').html('');
            console.log("Available Parameter");
            results.data.map(pipelineparam => {

                $('#pipelineFormulaParameter').append(`
                    <div class="col-3">
                    <a href="#" data-id-pipeline-param="${pipelineparam.id}" class="pipeline-formula-select btn btn-m btn-full mb-3 rounded-sm  font-900 border-highlight-dark color-highlight-dark bg-theme">${pipelineparam.name}</a>
                    </div>
                `);
                
            })

            $('.pipeline-formula-select').on('click' , function(){

              // will give the current postion of the cursor
              var curPos = document.getElementById("pipelineSimulationFormula").selectionStart; 
            
              // will get the value of the text area
              let x= $('#pipelineSimulationFormula').val();
            
              // will get the value of the input box
            //   let text_to_insert=$(this).html();
              let idPipelineParam = $(this).data('id-pipeline-param');
        
              // setting the updated value in the text area
              $('#pipelineSimulationFormula').val(x.slice(0,curPos)+'{{'+idPipelineParam+'}}'+x.slice(curPos));
              $("#pipelineSimulationFormula").focus();
            })

        }
        else{
            $('#pipelineFormulaParameter').html('');

            $('#pipelineFormulaParameter').append(`
            <br>
            <p class="text-center">Parameter is empty. Please add first at parameter tab.</p>
            <br>
            `);
        }
    }
    else
    {
        $('#pipelineFormulaParameter').html('');

        $('#pipelineFormulaParameter').append(`
        <br>
        <p class="text-center">Parameter is empty. Please add first at parameter tab.</p>
        <br>
        `);
    }
}

///////////////////////////////////////////////////////////////////////
//Add Pipeline Simulator
$("#addPipelineSimulationForm").on('submit' , function(event){

    event.preventDefault();
    if (navigator.onLine) {
        var formElement = $(this);

         // Loop over them and prevent submission if validation fail
         Array.prototype.slice.call(formElement)
         .forEach(function (formValidate) {
            if (!formValidate.checkValidity()) 
            {
                event.preventDefault()
                event.stopPropagation()
            }
            else
            {
                let form = formElement[0];
                let btnSubmitForm = $('#add-pipeline-simulation');

                btnSubmitForm.addClass('off-btn').trigger('classChange');

                var idPipeline = $('#idPipeline4Simulation').val();
               

                fetch("pipelinesimulator", {
                    method: 'post',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: new FormData(form),
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){
                        
                        btnSubmitForm.removeClass('off-btn').trigger('classChange');

                        menu('menu-add-pipeline-simulation', 'hide', 250);

                        snackbar(results.status , results.message)

                        form.reset();

                        getPipelineSimulation(idPipeline);

                    }
                    else{
                        if(results.type == 'Validation Error')
                        {
                            btnSubmitForm.removeClass('off-btn').trigger('classChange');

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
            formValidate.classList.add('was-validated');
        });
    }
    else{
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//Check if idPipeline already assign into the modal
$('#btn-menu-add-pipeline-simulation').on('click' , function(){
    let idPipeline = $('#menu-add-pipeline-simulation').find('.selected-pipeline').html();
    if(idPipeline){
        menu('menu-add-pipeline-simulation', 'show', 250);
    }else{
        snackbar('warning' , 'Please select pipeline first.')
    }
});
///////////////////////////////////////////////////////////////////////
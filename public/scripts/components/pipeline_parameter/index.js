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
            
            pipelineFormulaParameterBuilder(results);

            pipelineParameterListBuilder(results);

           
           

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

function pipelineParameterListBuilder(results){
    if (results.data){
        if (results.data.length) {
            $('#pipelineParameterList').html('');

            results.data.map(pipelineparam => {

                $('#pipelineParameterList').append(`
                    <a href="#" class="open-menu-pipeline-parameter d-flex mb-3" data-id-pipeline-parameter="${pipelineparam.id}" >

                        <div class="align-self-center">
                        <h1 class="mb-n2 font-16">${pipelineparam.name}</h1>
                        <p class="font-11 opacity-60">${pipelineparam.required === 1 ? 'required' : 'optional'}</p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                        <h2 class="mb-n1 font-18 color-highlight">${pipelineparam.type}</h2>
    
                        </div>
                    </a>
                `)

                $('.open-menu-pipeline-parameter').on('click' , function(){
                    
                    let idPipelineParameter = $(this).data('id-pipeline-parameter');

                    pipelineParameterContentBuilder(idPipelineParameter);

                })
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

function pipelineParameterContentBuilder(idPipelineParameter){
    fetch('/pipelineparametercontent/'+idPipelineParameter+'').then(function (response) {
        return response.json();
    }).then(function (resultsJSON) {

        var results = resultsJSON

        if (results.status == 'success') {

            if (results.data) {

                $('#content-menu-pipeline-parameter').html('');

                    var html = `
                        <table class="w-100" style="background-color:transparent !important;border:none;height:90% !important">
                            <tr>
                            <td class="align-top" style="background-color:transparent !important;height: 28%;">
                                <h4>${results.data.name}</h4>
                                <p class="color-highlight">${results.data.type}</p>
                            </td>
                            </tr>
                            <tr>
                            <td class="align-middle" style="background-color:transparent !important">
                                <p>${results.data.desc ? results.data.desc : 'No description provided.'}</p>
                            </td>
                            </tr>
                        </table>
                        `;

                    $('#content-menu-pipeline-parameter').append(html);
                    
            } else {
            
                $('#content-menu-pipeline-parameter').html('');

                $('#content-menu-pipeline-parameter').append(`
                
                `);   

            }
            
        } else {
            $('#content-menu-pipeline-parameter').html('');

            $('#content-menu-pipeline-parameter').append(`
            
            `); 
        }
    }).catch(function (err) {
        console.log('Error Get Pipeline Parameters Content: ' + err);
    });


    menu('menu-pipeline-parameter' , 'show' , 250);
    menu('menu-hider' , 'hide' , 250);
}

///////////////////////////////////////////////////////////////////////
//Add Pipeline Parameter
$("#addPipelineParamForm").on('submit' , function(event){

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
                let btnSubmitForm = $('#add-pipeline-param');

                btnSubmitForm.addClass('off-btn').trigger('classChange');

                let formData = new FormData(form);
                if ($('#pipelineParameterRequired').is(":checked"))
                {
                    var pipelineParameterRequired = 1;
                    formData.append('pipelineParameterRequired', pipelineParameterRequired);
                }
                else
                {
                    var pipelineParameterRequired = 0;
                    formData.append('pipelineParameterRequired', pipelineParameterRequired);
                }

                var idPipeline = $('#idPipeline').val();

                fetch("pipelineparameter", {
                    method: 'post',
                    credentials: "same-origin",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    body: formData,
                })
                .then(function(response){
                    return response.json();
                }).then(function(resultsJSON){

                    var results = resultsJSON

                    if(results.status == 'success'){
                        
                        btnSubmitForm.removeClass('off-btn').trigger('classChange');

                        menu('menu-add-pipeline-parameter', 'hide', 250);

                        snackbar(results.status , results.message)

                        form.reset();

                        getPipelineParameter(idPipeline);
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
                    console.log('Error Add New Pipeline Parameter: ' + err);
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
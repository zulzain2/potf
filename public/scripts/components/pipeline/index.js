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
//Add Pipeline
$("#addPipelineForm").on('submit' , function(event){

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
                let btnSubmitForm = $('#add-pipeline')

                btnSubmitForm.addClass('off-btn').trigger('classChange');

                fetch("pipeline", {
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

                        getAllPipeline();
                        
                        btnSubmitForm.removeClass('off-btn').trigger('classChange');

                        snackbar(results.status , results.message)

                        form.reset();

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
                    console.log('Error Add New Pipeline: ' + err);
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
//Delete Pipeline
$("#deletePipelineForm").on('submit' , function(event){

    event.preventDefault();
    if (navigator.onLine) {
        var formElement = $(this);

        var formdata = new FormData();
        formdata.append("_method", "DELETE");

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
                let form = new FormData(formElement[0]);
                let btnSubmitForm = $('#delete-pipeline');

                btnSubmitForm.addClass('off-btn').trigger('classChange');

                // var deletePipelineId = $('#idPipelineDelete').val();

                fetch("pipeline/"+form.get('idPipelineDelete')+"/", {
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


                        btnSubmitForm.removeClass('off-btn').trigger('classChange');

                        menu('menu-delete-pipeline', 'hide', 250);

                        snackbar(results.status , results.message)

                        getAllPipeline();

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
                    console.log(err);
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




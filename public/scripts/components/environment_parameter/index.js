function getTerrainParameter(idTerrain) {

    $('#terrainParameterList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);


    fetch('/terrainparameter/' + idTerrain + '').then(function (response) {
        return response.json();
    }).then(function (resultsJSON) {

        var results = resultsJSON

        if (results.status == 'success') {

            terrainFormulaParameterBuilder(results);

            terrainParameterListBuilder(results);

        } else {
            if (results.type == 'Validation Error') {
                validationErrorBuilder(results);
            } else {
                snackbar(results.status, results.message)
            }
        }

    }).catch(function (err) {
        console.log('Error Get Terrain Parameter: ' + err);
    });
}

function terrainParameterListBuilder(results) {
    if (results.data) {
        if (results.data.length) {
            $('#terrainParameterList').html('');

            results.data.map(terrainparam => {

                $('#terrainParameterList').append(`
                    <a href="#" class="open-menu-terrain-parameter d-flex mb-3" data-id-terrain-parameter="${terrainparam.id}" >

                        <div class="align-self-center">
                        <h1 class="mb-n2 font-16">${terrainparam.name}</h1>
                        <p class="font-11 opacity-60">${terrainparam.required === 1 ? 'required' : 'optional'}</p>
                        </div>
                        <div class="align-self-center ms-auto text-end">
                        <h2 class="mb-n1 font-18 color-highlight">${terrainparam.type}</h2>
    
                        </div>
                    </a>
                `)

                $('.open-menu-terrain-parameter').on('click' , function(){
                    
                    let idTerrainParameter = $(this).data('id-terrain-parameter');

                    terrainParameterContentBuilder(idTerrainParameter);

                })


            })

        } else {
            $('#terrainParameterList').html('');

            $('#terrainParameterList').append(`
            <br>
            <p class="text-center">Parameter is empty. To add click on the plus button. To view other parameter, please select other Environment</p>
            <br>
            `);
        }
    } else {
        $('#terrainParameterList').html('');

        $('#terrainParameterList').append(`
            
        `);
    }
}


function terrainParameterContentBuilder(idTerrainParameter){
    fetch('/terrainparametercontent/'+idTerrainParameter+'').then(function (response) {
        return response.json();
    }).then(function (resultsJSON) {

        var results = resultsJSON

        if (results.status == 'success') {

            if (results.data) {

                $('#content-menu-terrain-parameter').html('');

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

                    $('#content-menu-terrain-parameter').append(html);
                    
            } else {
            
                $('#content-menu-terrain-parameter').html('');

                $('#content-menu-terrain-parameter').append(`
                
                `);   

            }
            
        } else {
            $('#content-menu-terrain-parameter').html('');

            $('#content-menu-terrain-parameter').append(`
            
            `); 
        }
    }).catch(function (err) {
        console.log('Error Get Terrain Parameters Content: ' + err);
    });


    menu('menu-terrain-parameter' , 'show' , 250);
    menu('menu-hider' , 'hide' , 250);
}



///////////////////////////////////////////////////////////////////////
//Add Terrain Parameter
$('#addTerrainParamForm').on('submit', function (event) {

    event.preventDefault();
    if (navigator.onLine) {
        var formElement = $(this);

        // Loop over them and prevent submission if validation fail
        Array.prototype.slice.call(formElement)
            .forEach(function (formValidate) {
                if (!formValidate.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    let form = formElement[0];
                    let btnSubmitForm = $('#add-terrain-param');

                    btnSubmitForm.addClass('off-btn').trigger('classChange');

                    let formData = new FormData(form);
                    if ($('#terrainParameterRequired').is(":checked")) {
                        var terrainParameterRequired = 1;
                        formData.append('terrainParameterRequired', terrainParameterRequired);
                    } else {
                        var terrainParameterRequired = 0;
                        formData.append('terrainParameterRequired', terrainParameterRequired);
                    }

                    var idTerrain = $('#idTerrain').val();

                    fetch("terrainparameter", {
                            method: 'post',
                            credentials: "same-origin",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            body: formData,
                        })
                        .then(function (response) {
                            return response.json();
                        }).then(function (resultsJSON) {

                            var results = resultsJSON

                            if (results.status == 'success') {

                                btnSubmitForm.removeClass('off-btn').trigger('classChange');

                                menu('menu-add-terrain-parameter', 'hide', 250);

                                snackbar(results.status, results.message)

                                form.reset();

                                getTerrainParameter(idTerrain);
                                getTerrainSimulation(idTerrain);

                            } else {
                                if (results.type == 'Validation Error') {
                                    btnSubmitForm.removeClass('off-btn').trigger('classChange');

                                    validationErrorBuilder(results);
                                } else {
                                    snackbar(results.status, results.message)
                                }
                            }

                        })
                        .catch(function (err) {
                            console.log('Error Add New Terrain Parameter: ' + err);
                        });


                }
                formValidate.classList.add('was-validated');
            });
    } else {
        menu('menu-offline', 'show', 250);
    }
});
///////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
//Check if idTerrain already assign into the modal
$('#btn-menu-add-terrain-parameter').on('click', function () {
    let idTerrain = $('#menu-add-terrain-parameter').find('.selected-terrain').html();
    console.log(idTerrain);
    if (idTerrain) {
        menu('menu-add-terrain-parameter', 'show', 250);
    } else {
        snackbar('warning', 'Please select environment first.')
    }
});
///////////////////////////////////////////////////////////////////////
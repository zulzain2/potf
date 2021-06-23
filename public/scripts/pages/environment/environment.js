function terrainFormulaParameterBuilder(results) {
    if (results.data) {
        if (results.data.length) {
            
            $('#terrainFormulaParameter').html('');
            console.log("Available Parameter");
            results.data.map(terrainparam => {
            
                $('#terrainFormulaParameter').append(`
                    <div class="col-3">
                    <a href="#" data-id-terrain-param="${terrainparam.id}" data-terrain-param="${terrainparam.name}" class="terrain-formula-select btn btn-m btn-full mb-3 rounded-sm font-900 border-highlight-dark color-highlight-dark bg-theme">${terrainparam.name}</a>
                    </div>
                `);

            })

            $('.terrain-formula-select').on('click', function () {

                // will give the current postion of the cursor
                var curPos = document.getElementById("terrainSimulationFormula").selectionStart;

                // will get the value of the text area
                var x = $('#terrainSimulationFormula').val();

                // will get the value of the input box
                //   let text_to_insert=$(this).html();
                var idTerrainParam = $(this).data('id-terrain-param');

                var inputs = new Array();
                $("#terrainSimulationFormulaConvert").each(function(){
                    inputs.push($(this).val());
                })

                // setting the updated value in the text area
                $('#terrainSimulationFormula').val(x.slice(0, curPos) + '{{' + idTerrainParam + '}}' + x.slice(curPos));
                $("#terrainSimulationFormula").focus();
            })

        } else {
            $('#terrainFormulaParameter').html('');

            $('#terrainFormulaParameter').append(`
            <br>
            <p class="text-center">Parameter is empty. Please add first at parameter tab.</p>
            <br>
            `);
        }
    } else {
        $('#terrainFormulaParameter').html('');

        $('#terrainFormulaParameter').append(`
        <br>
        <p class="text-center">Parameter is empty. Please add first at parameter tab.</p>
        <br>
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

function getAllTerrain() {
    fetch('/terrain').then(function (response) {
        return response.json();
    }).then(function (resultsJSON) {

        var results = resultsJSON

        if (results.status == 'success') {

            if (results.data) {
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

                        $('.deleteTerrain').on('click', function () {
                            let idTerrain = $(this).data('idterrain');
                            $('#idTerrainDelete').val(idTerrain);
                            menu('menu-delete-terrain', 'show', 250);
                        })

                    }


                } else {

                    if (document.querySelector('#selectTerrain')) {
                        $('#selectTerrain').html('');

                        $('#selectTerrain').append(`
                        <option value="default" disabled="" selected="">Select an Environment</option>
                        `);

                        $('#tbl-terrain').html('');
                    }

                }
            }

        } else {
            if (results.type == 'Validation Error') {
                validationErrorBuilder(results);
            } else {
                snackbar(results.status, results.message)
            }
        }

    }).catch(function (err) {
        console.log('Error Get All Terrain: ' + err);
    });
}



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

function terrainSimulationContentBuilder(){
    $('.open-menu-terrain-simulation').on('click' , function(){

        menu('menu-terrain-simulation' , 'show' , 250);
        menu('menu-terrain-simulation-bottom' , 'show' , 250)

        let idTerrainSimulation = $(this).data('idTerrainSimulation');

        fetch('/terrainsimulatorcontent/'+idTerrainSimulation+'').then(function (response) {
            return response.json();
        }).then(function (resultsJSON) {
    
            var results = resultsJSON
    
            if (results.status == 'success') {

                if (results.data) {

                    $('#content-menu-terrain-simulation').html('');

                        var html = `
                            <div class="card card-style mb-3">
                                <div class="content">
                                    <h3 class="text-center mb-0">${results.data.name}</h3>
                                    <p class="text-center">
                                    Added on - ${moment(results.data.created_at).format('MMMM Do')} 
                                    </p>
                                    <p class="text-center color-invert">
                                    ${results.data.desc ? results.data.desc : ''} 
                                    </p>
                                    <div class="row mb-0">
                                    <h3 class="text-center mb-3">Formula Functions</h3><h6 class="mb-3"><i class="fas fa-equals"></i>&nbsp;&nbsp;`;

                                    results.data.terrain_simulator_formula.map(formula => {
                                    
                                        if(formula.terrain_parameter){
                                            html += `<strong class="color-highlight">{{${formula.terrain_parameter.name}}}</strong>`;
                                        }
                                        else{
                                            html += `${formula.id_terrain_parameter}`;
                                        }
                                    });

                                    html += `</h6></div>
                                    </div>
                                </div>`;

                        $('#content-menu-terrain-simulation').append(html);


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

                        $('#content-menu-terrain-simulation-bottom').html(html);

                        $('#closeMenuTerrainSimulation').on('click' , function(){
         
                            menu('menu-terrain-simulation-bottom' , 'show' , 250)
                        })

                 

                } else {
                
                    $('#content-menu-terrain-simulation').html('');

                    $('#content-menu-terrain-simulation').append(`
                    
                    `);   

                }
                
            } else {
                $('#content-menu-terrain-simulation').html('');

                $('#content-menu-terrain-simulation').append(`
                
                `); 
            }
        }).catch(function (err) {
            console.log('Error Get Terrain Simulators Content: ' + err);
        });

    });
}

function getTerrainSimulation(idTerrain) {

    $('#terrainSimulationList').html(`
    <br>

    <div class="d-flex justify-content-center">
        <div class="spinner-border color-highlight text-center" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <br>
    `);


    fetch('/terrainsimulator/' + idTerrain + '').then(function (response) {
        return response.json();
    }).then(function (resultsJSON) {

        var results = resultsJSON

        if (results.status == 'success') {

            if (results.data) {
                if (results.data.length) {
                    $('#terrainSimulationList').html('');

                    results.data.map(terrainsimulator => {

                        $('#terrainSimulationList').append(`
                            <a href="#" class="open-menu-terrain-simulation" data-id-terrain-simulation="${terrainsimulator.id}" class="d-flex mb-3">
                                <table style="width:100%;background-color:transparent !important;border:none;">
                                    <tr>
                                        <td style="background-color:transparent !important;width:70%">
                                            <div class="align-self-center">
                                                <h1 class=" font-16">${terrainsimulator.name}</h1>
                                            </div>
                                        </td>
                                        <td style="background-color:transparent !important;text-align:right;width:30%">
                                            <small class="color-highlight">${moment(terrainsimulator.created_at).format('MMMM Do')}</small>
                                        </td>
                                    </tr>
                                </table>
                            </a>
                            <div class="divider mb-2 mt-2"></div>
                        `)
                    })

                    terrainSimulationContentBuilder();

                } else {
                    $('#terrainSimulationList').html('');

                    $('#terrainSimulationList').append(`
                    <br>
                    <p class="text-center">Simulator is empty. To add click on the plus button. To view other simulators, please select other Environment</p>
                    <br>
                    `);
                }
            } else {
                $('#terrainSimulationList').html('');

                $('#terrainSimulationList').append(`
                    
                `);
            }

        } else {
            if (results.type == 'Validation Error') {
                validationErrorBuilder(results);
            } else {
                snackbar(results.status, results.message)
            }
        }

    }).catch(function (err) {
        console.log('Error Get Terrain Simulators: ' + err);
    });
}




///////////////////////////////////////////////////////////////////////
// Select terrain dropdown
if (document.querySelector('#selectTerrain')) {

    //Initialize terrain dropdown
    getAllTerrain();

    //Event listener for terrain dropdown
    $('#selectTerrain').on('change', () => {
        let val = $('#selectTerrain').val();
        $('.selected-terrain').html(val);
        $('.idTerrain').val(val);

        getTerrainParameter(val);
        getTerrainSimulation(val);
    })

}
///////////////////////////////////////////////////////////////////////


    
///////////////////////////////////////////////////////////////////////
//Add Terrain
$('#addTerrainForm').on('submit', function (event) {

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
                    let btnSubmitForm = $('#add-terrain');

                    btnSubmitForm.addClass('off-btn').trigger('classChange');

                    fetch("terrain", {
                            method: 'post',
                            credentials: "same-origin",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            body: new FormData(form),
                        })
                        .then(function (response) {
                            return response.json();
                        }).then(function (resultsJSON) {

                            var results = resultsJSON

                            if (results.status == 'success') {

                                getAllTerrain();

                                btnSubmitForm.removeClass('off-btn').trigger('classChange');

                                snackbar(results.status, results.message)

                                form.reset();

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
                            console.log('Error Add New Terrain: ' + err);
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
//Add Terrain Simulator
$('#addTerrainSimulationForm').on('submit', function (event) {

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
                    let btnSubmitForm = $('#add-terrain-simulation');

                    btnSubmitForm.addClass('off-btn').trigger('classChange');

                    var idTerrain = $('#idTerrain4Simulation').val();

                    fetch("terrainsimulator", {
                            method: 'post',
                            credentials: "same-origin",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                            },
                            body: new FormData(form),
                        })
                        .then(function (response) {
                            return response.json();
                        }).then(function (resultsJSON) {

                            var results = resultsJSON

                            if (results.status == 'success') {

                                btnSubmitForm.removeClass('off-btn').trigger('classChange');

                                menu('menu-add-terrain-simulation', 'hide', 250);

                                snackbar(results.status, results.message)

                                form.reset();

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
                            console.log('Error Add New Terrain Simulation: ' + err);
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
//Delete Terrain
$('#deleteTerrainForm').on('submit', function (event) {

    event.preventDefault();
    if (navigator.onLine) {
        var formElement = $(this);

        var formdata = new FormData();
        formdata.append("_method", "DELETE");

        // Loop over them and prevent submission if validation fail
        Array.prototype.slice.call(formElement)
            .forEach(function (formValidate) {
                if (!formValidate.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    let form = new FormData(formElement[0]);
                    let btnSubmitForm = $('#delete-terrain');

                    btnSubmitForm.addClass('off-btn').trigger('classChange');

                    // var deleteTerrainId = $('#idTerrainDelete').val();

                    fetch("terrain/" + form.get('idTerrainDelete') + "/", {
                            method: 'DELETE',
                            credentials: "same-origin",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        })
                        .then(function (response) {
                            return response.json();
                        }).then(function (resultsJSON) {

                            var results = resultsJSON

                            if (results.status == 'success') {


                                btnSubmitForm.removeClass('off-btn').trigger('classChange');

                                menu('menu-delete-terrain', 'hide', 250);

                                snackbar(results.status, results.message)

                                getAllTerrain();

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
                            console.log(err);
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

///////////////////////////////////////////////////////////////////////
//Check if idTerrain already assign into the modal
$('#btn-menu-add-terrain-simulation').on('click', function () {
    let idTerrain = $('#menu-add-terrain-simulation').find('.selected-terrain').html();
    if (idTerrain) {
        menu('menu-add-terrain-simulation', 'show', 250);
    } else {
        snackbar('warning', 'Please select environment first.')
    }
});
///////////////////////////////////////////////////////////////////////



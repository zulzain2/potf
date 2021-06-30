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






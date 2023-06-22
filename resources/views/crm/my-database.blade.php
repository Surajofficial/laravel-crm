@section('page-title', 'Double Approval')
@extends('layouts.main-landingpage')
@section('page-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Profile Details</h4>
                    <div class="page-title-left">
                        <a href="#"
                            class="btn btn-sm btn-bordered btn-purple search_lead waves-effect waves-light float-right">Overall
                            Search</a>
                    </div>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">My Database</a></li>
                            <li class="breadcrumb-item active">Database Profiles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="col-md-12 showPhotos">
                            <table class="table table-striped table-inverse" id="user-list-table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Residance</th>
                                        <th>Manglik</th>
                                        <th>Reg Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

    <div class="modal fade" id="cropperModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title  text-white">Upload User Photo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="number" name="user_id_photo" id="user_id_photo" class="d-none">
                        <div class="form-group">
                            <input type="text" name="user_imagesixfour" class="form-control d-none"
                                id="user_imagesixfour">
                        </div>
                        <div class="form-group">
                            <div class="modal-positioner">
                                <img style="width: 271px; height: 271px;" class="js-avatar-preview" src="">
                            </div>
                        </div>
                        <div class="form-group d-none">
                            <img id="avatar-crop" src="" style="width: 384px; height: 512px;">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary js-save-cropped-avatar">Save and Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>

           // loadAllCastes();

            function loadAllCastes() {
                var caste_html = '<option value="">Select Caste</option>';
                $.ajax({
                    url: "{{ route('getallcastes') }}",
                    type: "get",
                    success: function(caste_Response) {
                        for (let k = 0; k < caste_Response.length; k++) {
                            const caste_list = caste_Response[k];
                            caste_html +=
                                `<option value="${caste_list.id}">${caste_list.caste ?? caste_list.value}</option>`;
                        }
                        $('#castes').html(caste_html);
                        $('#castes_pref').html(caste_html);
                    }
                });
            }

            // get parent occupation
            getParentOccupation();

            function getParentOccupation() {
                $.ajax({
                    url: "{{ route('getparentoccupation') }}",
                    type: "get",
                    success: function(parentOcResp) {
                        var prentHtml = '';
                        for (let m = 0; m < parentOcResp.length; m++) {
                            const pOccupations = parentOcResp[m];
                            prentHtml +=
                                `<option value="${pOccupations.id}">${pOccupations.name}</option>`;
                        }
                        $("#father_status").html(prentHtml);
                        $("#mother_status").html(prentHtml);
                    }
                });
            }

            // load all users
            loadAllTemples();

            function loadAllTemples() {
                var temple_html = '<option value="">Select User</option>';
                var login_user = "{{ Auth::user()->temple_id }}";
                var temple_id_html = '';
                $.ajax({
                    url: "{{ route('getalltemples') }}",
                    type: "get",
                    success: function(temple_response) {
                        for (let l = 0; l < temple_response.length; l++) {
                            const temple_list = temple_response[l];
                            if (temple_list.temple_id == login_user) {
                                temple_html +=
                                    `<option selected="selected" value="${temple_list.temple_id}">${temple_list.name}</option>`;
                                temple_id_html +=
                                    `<option selected="selected" value="${temple_list.id}">${temple_list.name}</option>`;
                            } else {
                                temple_html +=
                                    `<option value="${temple_list.temple_id}">${temple_list.name}</option>`;
                                temple_id_html +=
                                    `<option value="${temple_list.id}">${temple_list.name}</option>`;
                            }
                        }
                        $('#assign_to').html(temple_html);
                        $("#appoinemtn_with").html(temple_id_html);
                    }
                });
            }

            // load religion
            loadReligion();

            function loadReligion() {
                var religion_html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('allreligion') }}",
                    success: function(religion_resp) {
                        for (let q = 0; q < religion_resp.length; q++) {
                            const religsion_data = religion_resp[q];
                            religion_html +=
                                `<option value="${religsion_data.id}">${religsion_data.religion}</option>`;
                        }
                        $('#religion').html(religion_html);
                        $('#religion_preference').html(religion_html);
                    }
                });
            }

            // load relation
            loadRelation();

            function loadRelation() {
                var relation_html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('getrelation') }}",
                    success: function(relation_resp) {
                        for (let p = 0; p < relation_resp.length; p++) {
                            const relation_data = relation_resp[p];
                            relation_html +=
                                `<option value="${relation_data.id}">${relation_data.name}</option>`;
                        }
                        $('#profile_creating_for').html(relation_html);
                    }
                });
            }

            // load marital status
            loadMaritalStatus();

            function loadMaritalStatus() {
                var marital_status_html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('getmaritalstatus') }}",
                    success: function(mstastus_resp) {
                        for (let o = 0; o < mstastus_resp.length; o++) {
                            const mstatus_data = mstastus_resp[o];
                            marital_status_html +=
                                `<option value="${mstatus_data.id}">${mstatus_data.name}</option>`;
                        }
                        $('#marital_status').html(marital_status_html);
                        $('#marital_status').val(1);
                        $('#marital_status_perf').html(marital_status_html);
                    }
                });
            }

            // load manglik status
            loadManglikStatus();

            function loadManglikStatus() {
                var marital_status_html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('getmanglikstatus') }}",
                    success: function(mstastus_resp) {
                        for (let o = 0; o < mstastus_resp.length; o++) {
                            const mstatus_data = mstastus_resp[o];
                            marital_status_html +=
                                `<option value="${mstatus_data.id}">${mstatus_data.name}</option>`;
                        }
                        $('#manglik_status').html(marital_status_html);
                        $('#manglik_pref').html(marital_status_html);
                        $('#manglik_status').val(2);
                    }
                });
            }

            // load occupations
            loadOccupations();

            function loadOccupations() {
                var occupation_status_html = '';
                $.ajax({
                    type: "get",
                    url: "{{ route('getoccupation') }}",
                    success: function(occupation_resp) {
                        for (let n = 0; n < occupation_resp.length; n++) {
                            const occupation_data = occupation_resp[n];
                            occupation_status_html +=
                                `<option value="${occupation_data.id}">${occupation_data.name}</option>`;
                        }
                        $('#occupation_list').html(occupation_status_html);
                        $('#occupation_status_perf').html(occupation_status_html);
                    }
                });
            }

            // polulate heights
            populateHeight();

            function populateHeight() {
                var height_values = '<option value="">Select Height</option>';
                for (let k = 48; k < 96; k++) {
                    height_values += `<option value="${k}">${Math.floor(k/12)} Ft ${k%12} In</option>`;
                }
                $('#user_height').html(height_values);
                $('#user_height').val(65);
            }

            // get religion
            getReligion();

            function getReligion() {
                religion_html = `<option value="">Select Religion</option>`;
                $.ajax({
                    url: "{{ route('allreligion') }}",
                    type: "get",
                    success: function(religions) {
                        for (let i = 0; i < religions.length; i++) {
                            const religion = religions[i];
                            religion_html +=
                                `<option value="${religion.id}">${religion.religion}</option>`;
                        }
                        $('#religion').html(religion_html);
                        $('#religion_preference').html(religion_html);
                    }
                })
            }

            // load qualifications
            loadQualifications();

            function loadQualifications() {
                var qual_html = '';
                $.ajax({
                    url: "{{ route('getalleducations') }}",
                    type: "get",
                    success: function(qualification_resp) {
                        for (let j = 0; j < qualification_resp.length; j++) {
                            const qualifications = qualification_resp[j];
                            qual_html +=
                                `<option value="${qualifications.id}" qualname="${qualifications.degree_name}">${qualifications.degree_name}</option>`;
                        }
                        $('#education_list').html(qual_html);
                    }
                });
            }

        $(document).ready(function() {
            var databaseTable = $('#user-list-table').DataTable({
                "order": [
                    [4, "desc"]
                ],
                "processing": true,
                "ajax": "{{ route('myuserlist') }}",
                "columns": [{
                        data: 'name',
                    },
                    {
                        data: 'gender',
                    },
                    {
                        data: null,
                        render: function(data) {
                            return `${data.working_city}`;
                        }
                    },
                    {
                        data: 'manglik',
                    },
                    {
                        data: 'created_at',
                    },
                    {
                        data: null,
                        render: function(data) {
                            var returnHtml = '<div class="d-flex">';
                            returnHtml =
                                `<button class="btn btn-success btn-xs viewDetails" leadid="${data.user_id}">View Details</button>
                                 <button class="btn btn-warning btn-xs edit_n_approve_user" user_id="${data.user_id}">Edit Details</button>
                                 <button class="btn btn-danger btn-xs mark_married" user_id="${data.user_id}">Mark Married</button>
                                 <button class="btn btn-purple btn-xs mark_premium" user_id="${data.user_id}">Mark Premium</button>
                                 <button class="btn btn-primary btn-xs addCreditButton" user_id="${data.user_id}">Add Credits</button>
                                 <input type="file" name="photo" accept="image/*" class="js-photo-upload" userId="${data.user_id}">
                                 `;

                            returnHtml += '</div>';
                            return returnHtml;
                        }
                    }
                ]
            });

            // select gender automatically
            $(document).on('change', '#profile_creating_for', function() {
                if ($(this).val() == "4,Sister" || $(this).val() == "2,Mother" || $(this).val() == "7,Daughter") {
                    $('#lead_gender').val(2);
                    $('#lead_gender').prop("disabled", true);
                } else if ($(this).val() == "3,Father" || $(this).val() == "5,Brother" || $(this).val() == "6,Son") {
                    $('#lead_gender').val(1);
                    $('#lead_gender').prop("disabled", true);
                } else {
                    $('#lead_gender').val(1);
                    $('#lead_gender').prop("disabled", false);
                }
            });

                $(document).on('click', '.link_to_profess', function() {
                    $('#profile-tab-1').removeClass('active');
                    $('.personal_nav_link').removeClass('active');
                    $('#profile-tab-2').addClass('active');
                    $('.profile_tabl_2').addClass('active');
                });

                /*
                 reject profile
                */
                $(document).on('click', '.rejectProfile', function(e) {
                    e.preventDefault();
                    if (confirm("Are You Sure To Reject")) {
                        $('.loader').show();
                        $.ajax({
                            url: "{{ route('rejectuserprofile') }}",
                            type: "get",
                            data: {
                                "user_id": $(this).attr('userid')
                            },
                            success: function(rejectResponse) {
                                $('.loader').hide();
                                alert(rejectResponse.message);
                                table_data.ajax.reload();
                            }
                        });
                    }
                });

                function getCitiesName(city_name) {
                    var city_html = ' <ul class="list-group city_list">';
                    $.ajax({
                        url: "{{ route('getallcities') }}",
                        type: "get",
                        data: {
                            "city_name": city_name
                        },
                        success: function(city_response) {
                            for (let i = 0; i < city_response.length; i++) {
                                const city_names = city_response[i];
                                city_html +=
                                    `<li class="list-group-item city_name" id="${city_names.id}" cityname="${city_names.city}, ${city_names.state}, ${city_names.country}">${city_names.city}, ${city_names.state}, ${city_names.country}</li>`;
                            }
                            city_html += '</ul>';
                            $('.cityListOptions').html(city_html);
                        }
                    });
                }

                $(document).on('click', '.city_name', function() {
                    var id = $(this).attr('id');
                    var city_name = $(this).attr('cityname');
                    $('.cityListOptions').html('');
                    $('#working_city').val(id);
                    $('#search_working_city').val(city_name);
                    generateAbout(city_name);
                });

                function generateAbout(cityName) {
                    var birthDateVal = $('#birth_date').val();

                    var today = new Date();
                    var birthDate = new Date(birthDateVal);
                    var age = today.getFullYear() - birthDate.getFullYear();
                    var m = today.getMonth() - birthDate.getMonth();
                    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }

                    var manglikStatus = $('#manglik_status').val();
                    var mStatus = '';
                    if (manglikStatus == 1) {
                        mStatus = 'Manglik';
                    } else if (manglikStatus == 2) {
                        mStatus = 'Non-Manglik';
                    } else if (manglikStatus == 3) {
                        mStatus = 'Anshik Manglik';
                    } else if (manglikStatus == 4) {
                        mStatus = "Don't Know";
                    }

                    var gender = $('#lead_gender').val();
                    var gName = '';
                    if (gender == 1) {
                        gName = 'Man';
                    } else {
                        gName = 'Woman';
                    }

                    getQualificationById($('#education_list').val());
                    var qualification = localStorage.getItem('userDegree');

                    var occupation = $('#occupation_list').val();
                    var occupationString = '';
                    if (occupation != 7 || occupation != 6) {
                        var occupationName = '';
                        if (occupation == 1) {
                            occupationName = "Business/Self Employed";
                        } else if (occupation == 2) {
                            occupationName = "Doctor";
                        } else if (occupation == 3) {
                            occupationName = "Government Job";
                        } else if (occupation == 4) {
                            occupationName = "Teacher";
                        } else if (occupation == 5) {
                            occupationName = "Private Job";
                        }
                        occupationString = `currently working as ${occupationName} in ${cityName}`;
                    } else {
                        occupationString = '';
                    }

                    var stringAbout =
                        `I am ${mStatus} ${gName} residing in ${cityName}. I've completed my ${qualification} ${occupationString}.`;

                    $('#about_me').val(stringAbout);
                }

                // get qualification by id
                function getQualificationById(qualification) {
                    $.ajax({
                        url: "{{ route('getqualificationById') }}",
                        type: "get",
                        data: {
                            "qualification": qualification
                        },
                        success: function(qualresponse) {
                            localStorage.setItem('userDegree', qualresponse.degree_name);
                        }
                    });
                }


            let cropper;
            let cropperModalId = '#cropperModal';
            let $jsPhotoUploadInput = $('.js-photo-upload');

            $(document).on('change', '.js-photo-upload', function() {
                var files = this.files;
                $('#user_id_photo').val($(this).attr('userId'));
                if (files.length > 0) {
                    var photo = files[0];
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var image = $('.js-avatar-preview')[0];
                        image.src = event.target.result;

                        cropper = new Cropper(image, {
                            viewMode: 1,
                            aspectRatio: 3 / 4,
                            minContainerWidth: 400,
                            minContainerHeight: 400,
                            minCropBoxWidth: 271,
                            minCropBoxHeight: 271,
                            movable: true,
                            ready: function() {
                                // console.log('ready');
                                // console.log(cropper.ready);
                            }
                        });

                        $(cropperModalId).modal('show');
                    };
                    reader.readAsDataURL(photo);
                }
            });

        });
    </script>
@endsection

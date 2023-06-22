@section('page-title', 'Double Approval')
@extends('layouts.main-landingpage')
@section('page-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title profileDetails">Send Sample Profile</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sample Profiles</a></li>
                            <li class="breadcrumb-item active">Find Match</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                {{-- filter starts --}}
                                <form action="" method="post" id="filterForm">
                                    @csrf
                                    <input type="number" name="user_gender" id="user_denger" class="d-none">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-md-12 mb-2">
                                                <label for="Looking For">Looking For</label>
                                                <select name="gender" id="gender" class="form-select" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="1" selected>Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="Age Range">Age Range</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="number" name="min_age" id="min_age" class="form-control"
                                                        value="25">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" name="max_age" id="max_age" class="form-control"
                                                        value="40">
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Height Range</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select name="min_height" id="min_height" class="form-select"></select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="max_height" id="max_height" class="form-select"></select>
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Religion</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="selectpicker col-md-12 casteSelector"
                                                        data-live-search="true" id="religion" name="religion">
                                                        @foreach ($religions as $religion)
                                                            <option value="{{ $religion->religion }}">
                                                                {{ $religion->religion }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Castes</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="selectpicker col-md-12 casteSelector" multiple
                                                        data-live-search="true" id="caste_lists" name="castes[]">
                                                        @foreach ($caste_list as $castes)
                                                            <option value="{{ $castes->id }}">
                                                                {{ $castes->caste ?? $castes->value }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Marital Status</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="col-md-12 selectpicker" multiple id="maritalStatus"
                                                        name="marital_status">
                                                        @foreach ($marital_status as $marital)
                                                            <option value="{{ $marital->id }}">
                                                                {{ $marital->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Manglik Status</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="col-md-12 selectpicker" multiple id="manglik_status"
                                                        name="manglik_status">
                                                        <option value="">Selct Status</option>
                                                        @foreach ($manglik_status as $manglik)
                                                            <option value="{{ $manglik->id }}">
                                                                {{ $manglik->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mt-2">
                                                    <label>Food Choice</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="form-select" name="food_choice" id="foor_choice">
                                                        <option value="">Select Food Choice</option>
                                                        <option value="2" selected>Non-Vegetarian</option>
                                                        <option value="1">Vegetarian</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12 mt-3">
                                                    <label>Working</label>
                                                </div>

                                                <div class="col-md-12">
                                                    <select class="col-md-12 selectpicker" multiple name="job_status"
                                                        id="job_status">
                                                        <option value="">Doesn't Matter</option>
                                                        @foreach ($workins as $occupation)
                                                            <option value="{{ $occupation->id }}">
                                                                {{ $occupation->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                                <div class="col-md-12 mt-2">
                                                    <label>Income Range</label>
                                                </div>

                                                <div class="col-md-6">
                                                    <select name="min_income" class="form-select" id="min_income">
                                                        @foreach ($income_range as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    {{-- <select name="max_income" class="form-select" id="filter_type">
                                                        <option value="<">Less Than</option>
                                                        <option value=">" selected>More Than</option>
                                                    </select> --}}
                                                    <select name="max_income" class="form-select" id="max_income">
                                                        @foreach ($income_range as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label>Other Options</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-check form-switch">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="disabled_profiles" name="disabled_profiles" checked>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked">Hide Disabled
                                                                Profiles</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2 text-center">
                                                    <button class="btn btn-success btn-sm searchBtnProfile" type="button"
                                                        name="button"><i class="fa fa-search" aria-hidden="true"></i>
                                                        Search</button>
                                                </div>
                                                {{-- div ends --}}
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{-- filter ends --}}
                            </div>

                            {{-- data display area --}}
                            <div class="col-md-9 col-sm-12">
                                <form action="{{ route('saveprofilelistsend') }}" method="post"
                                    id="selectedProfileForm">
                                    @csrf
                                    <input type="number" name="user_id_opened" class="d-none" value="">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col-sm-4">
                                                </div>
                                                <div class="col-sm-4">

                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="float-sm-end">
                                                        <button type="sutmit" name="submit"
                                                            class="btn btn-success mb-2 mb-sm-0"><i
                                                                class="mdi mdi-whatsapp"></i></button>
                                                    </div>
                                                </div><!-- end col-->
                                            </div>
                                            <!-- end row -->

                                            <div class="table-responsive">
                                                <div id="products-datatable_wrapper" class="dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-centered w-100"
                                                                id="sample_datatable"
                                                                style="border-collapse: collapse; border-spacing: 0px; width: 100%;"
                                                                role="grid">
                                                                <thead class="table-light">
                                                                    <tr role="row">
                                                                        <th></th>
                                                                        <th>Name</th>
                                                                        <th>Caste</th>
                                                                        <th>Birth Date</th>
                                                                        <th>Height </th>
                                                                        <th>Income</th>
                                                                        <th>Qualification</th>
                                                                        <th>Occupation</th>
                                                                        <th>City</th>
                                                                        <th>Family Income</th>
                                                                        <th>Father Status</th>
                                                                        <th>Mother Status</th>
                                                                        <th>Marital Status</th>
                                                                        <th>Manglik Status</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="filteredDataDiv">

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- data display area ends --}}
                        </div>
                    </div>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    </div>

    <!-- User Details Modal -->
    <div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-lg-5 diplayImage">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-8 imageDisplayArea">
                                                    <div id="product-carousel"
                                                        class="carousel slide product-detail-carousel"
                                                        data-bs-ride="carousel">

                                                        <div class="carousel-inner mainImage">
                                                            <div class="carousel-item">
                                                                <div>
                                                                    <img src="#" alt="product-img"
                                                                        class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <div>
                                                                    <img src="#" alt="product-img"
                                                                        class="img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="carousel-item active">
                                                                <div>
                                                                    <img src="#" alt="product-img"
                                                                        class="img-fluid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ol
                                                            class="carousel-indicators product-carousel-indicators mt-2 indicatorImage">
                                                            <li data-bs-target="#product-carousel" data-bs-slide-to="0"
                                                                class="">
                                                                <img src="#" alt="product-img"
                                                                    class="img-fluid product-nav-img">
                                                            </li>
                                                            <li data-bs-target="#product-carousel" data-bs-slide-to="1"
                                                                class="">
                                                                <img src="#" alt="product-img"
                                                                    class="img-fluid product-nav-img">
                                                            </li>
                                                            <li data-bs-target="#product-carousel" data-bs-slide-to="2"
                                                                class="active" aria-current="true">
                                                                <img src="#" alt="product-img"
                                                                    class="img-fluid product-nav-img">
                                                            </li>
                                                        </ol>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-7">
                                            <div>
                                                <div><span class="text-primary userCaste">T-shirts</span></div>
                                                <h4 class="mb-1 userName"></h4>
                                                <div class="mt-3">
                                                    <h6 class="text-danger text-uppercase monthlyIncomeUser">10 % Off</h6>
                                                    <h4>Education : <span class="text-muted me-2 qualificationUser"><del>$
                                                                50</del></span>
                                                        <b class="occupationUser">$ 45</b>
                                                    </h4>
                                                </div>
                                                <div><span class="text-primary userCity"></span></div>
                                                <hr>

                                                <div>
                                                    <p class="aboutUser"></p>

                                                    <div class="mt-3">
                                                        <h5 class="font-size-14">Other Details :</h5>
                                                        <div class="row otherDetails">
                                                            <div class="col-md-6">
                                                                <ul class="list-unstyled product-desc-list">
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Height : <span class="userHeight"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Weight : <span class="userWeight"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Gender : <span class="genderUser"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Mobile : <span class="userMobile"></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="list-unstyled product-desc-list">
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Brith Date : <span class="birthDateUser"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Food Choice : <span class="foodChoiceUser"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Manglik : <span class="manglikUser"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Marital Status : <span
                                                                            class="maritalStatusUser"></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <form class="d-flex flex-wrap align-items-center mb-3">

                                                            <label class="my-1 me-2" for="quantityinput">Profile Send
                                                                Day</label>
                                                            <div class="me-sm-3">
                                                                <select class="form-select my-1" id="profileSendDay">
                                                                    <option value="">Select</option>
                                                                    <option value="Mon">Mon</option>
                                                                    <option value="Tue">Tue</option>
                                                                    <option value="Wed">Wed</option>
                                                                    <option value="Thu">Thu</option>
                                                                    <option value="Fri">Fri</option>
                                                                    <option value="Sat">Sat</option>
                                                                    <option value="Sun">Sun</option>
                                                                </select>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <h5 class="mt-3 mb-3">Family Details</h5>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-centered mb-0">
                                            <tr>
                                                <th>Unmarried Brother</th>
                                                <th>Unmarried Sister</th>
                                                <th>Married Brother</th>
                                                <th>Married Sister</th>
                                            </tr>
                                            <tr>
                                                <td class="userUnmarriedBrothers">ASOS Ridley Outlet - NYC</td>
                                                <td class="userUnmarriedSisters">$139.58</td>
                                                <td class="userMarriedBrothers"></td>
                                                <td class="userMarriedSisters">$1,89,547</td>
                                            </tr>

                                            <tr>
                                                <th>Family Type</th>
                                                <th>House Type</th>
                                                <th>Father Status</th>
                                                <th>Mother Status</th>
                                            </tr>
                                            <tr>
                                                <td class="userFamilyType"></td>
                                                <td class="userHouseType"></td>
                                                <td class="fatherStatusUser"></td>
                                                <td class="motherStatusUser"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .img-fluid {
            height: 300px;
        }
    </style>

@endsection
@section('custom-scripts')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="{{ url('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('libs/jquery-datatables-checkboxes/js/dataTables.checkboxes.min.js') }}"></script>
    <script src="{{ url('js/pages/product-list.init.js') }}"></script>
    <script>
        "use strict";

        $(document).ready(function() {
            $(document).on('click', '.profileDetails', function(e) {
                e.preventDefault();
                $('#userDetailsModal').modal('show');
            });
            $(document).on('click', '.btn-close', function(e) {
                e.preventDefault();
                $('.modal ').modal('hide');
            });
            var disabled_profiles = 1;
            var table_data;
            table_data = $('#sample_datatable').DataTable({
                "order": [
                    [3, "asc"]
                ],
                "processing": true,
                "serverSide": true,
                "deferLoading": 0,
                "ajax": {
                    "url": "{{ route('sendsampleprofile') }}",
                    "type": "get",
                    "data": function(localSt) {
                        localSt.min_age = localStorage.getItem("minAge");
                        localSt.max_age = localStorage.getItem("maxAge");
                        localSt.min_height = localStorage.getItem("minHeight");
                        localSt.max_height = localStorage.getItem("maxHeight");
                        localSt.marital_status = localStorage.getItem("maritalStatus");
                        localSt.manglik_status = localStorage.getItem("manglikStatus");
                        localSt.food_choice = localStorage.getItem("foodChoice");
                        localSt.working = localStorage.getItem("workingStatus");
                        localSt.min_income = localStorage.getItem("minIncome");
                        localSt.max_income = localStorage.getItem("maxIncome");
                        localSt.kundli_score = localStorage.getItem("kundliScore");
                        localSt.castes = localStorage.getItem("castes");
                        localSt.religion = localStorage.getItem("religion");
                        localSt.user_gender = localStorage.getItem("userGender");
                        localSt.show_disabled = localStorage.getItem("disabled_profiles");
                    }
                },
                "columns": [{
                        data: null,
                        orderable: false,
                        render: function(data) {
                            return `  <div class="form-check font-16 mb-0">
                            <input id="${data.user_id}" name="profile_selected" class="user_profile" value="${data.user_id}" type="checkbox">
                            <label class="form-check-label">&nbsp;</label>
                        </div>`;
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.name) {
                                let retString = '';
                                if (data.photo != null || data.photo != 'null') {
                                    retString =
                                        `<img style="width:40px; height:auto" src="https://hansmatrimony.s3.ap-south-1.amazonaws.com/uploads/${data.photo}"><p>${data.name}</p>`;
                                } else {
                                    retString = data.name;
                                }
                                return retString;
                            } else {
                                return "NA";
                            }
                        }
                    },
                    {
                        data: 'caste',
                    },
                    {
                        data: null,
                        render: function(data) {
                            // var bDate = data.birth_date.split(" ");
                            return data.birth_date; //bDate[0];
                        }
                    },
                    {
                        data: 'height_int',
                    },
                    {
                        data: 'monthly_income',
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.education) {
                                return data.education;
                            } else {
                                return "NA";
                            }
                        }
                    },
                    {
                        data: 'occupation'
                    },
                    {
                        data: 'city',
                    },
                    {
                        data: 'family_income',
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.father_status) {
                                return data.father_status;
                            } else {
                                return "NA";
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.mother_status) {
                                return data.mother_status;
                            } else {
                                return "NA";
                            }
                        }
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.marital_status) {
                                return data.marital_status;
                            } else {
                                return "NA";
                            }
                        }
                    },
                    {
                        data: 'manglik',
                    }
                ],
            });

            $("#disabled_profiles").change(function() {
                if ($(this).prop("checked") == true) {
                    disabled_profiles = 1;
                } else {
                    disabled_profiles = 0;
                }
            });

            $(document).on('click', '.searchBtnProfile', function(e) {
                e.preventDefault();
                var minAge = $('#min_age').val();
                var maxAge = $('#max_age').val();
                var minHeight = $('#min_height').val();
                var maxHeight = $('#max_height').val();
                var castes = $('#caste_lists').val();
                var religion = $('#religion').val();
                var maritalStatus = $('#maritalStatus').val();
                var manglikStatus = $('#manglik_status').val();
                var foodChoice = $('#foor_choice').val();
                var workingStatus = $('#job_status').val();
                var minIncome = $('#min_income').val();
                var maxIncome = $('#max_income').val();
                var no_caste_bar = $('#no_caste_bar').val();
                var kundliScore = $('#get_kundli_score').val();
                var userGender = $('#gender').val();
                localStorage.setItem("minAge", minAge);
                localStorage.setItem("maxAge", maxAge);
                localStorage.setItem("minHeight", minHeight);
                localStorage.setItem("maxHeight", maxHeight);
                localStorage.setItem("castes", castes);
                localStorage.setItem("religion", religion);
                localStorage.setItem("maritalStatus", maritalStatus);
                localStorage.setItem("manglikStatus", manglikStatus);
                localStorage.setItem("foodChoice", foodChoice);
                localStorage.setItem("minIncome", minIncome);
                localStorage.setItem("maxIncome", maxIncome);
                localStorage.setItem("disabled_profiles", disabled_profiles);
                localStorage.setItem("no_caste_bar", no_caste_bar);
                localStorage.setItem("kundliScore", kundliScore);
                localStorage.setItem("userGender", userGender);
                localStorage.setItem("workingStatus", workingStatus);
                table_data.ajax.reload();
            });

            // after selecting profiles submit form and open profile list (remove ajax)
            $(document).on('submit', '#selectedProfileForm', function(e) {
                e.preventDefault();
                var profileArrays = localStorage.getItem("samplePdfArray");
                var route = "{{ route('pdfprofiles') }}";
                window.open(route + "?user_ids=" + profileArrays, '_blank');
            });

            $(document).on('click', function() {
                var array = [];
                $("input:checkbox[name=profile_selected]:checked").each(function() {
                    array.push($(this).val());
                });
                localStorage.setItem("samplePdfArray", array);
            });


            populateHeight();

            function populateHeight() {
                var height_values = '<option value="">Select Height</option>';
                for (let k = 48; k < 96; k++) {
                    height_values += `<option value="${k}">${Math.floor(k/12)} Ft ${k%12} In</option>`;
                }
                $('#min_height').html(height_values);
                $('#min_height').val(48);
                $('#max_height').html(height_values);
                $('#max_height').val(72);
            }

            function getUserDetails() {
                $.ajax({
                    url: "{{ route('getuserdatabyid') }}",
                    type: "get",
                    data: {
                        "user_id": ""
                    },
                    success: function(userResponse) {

                        $('#max_height').val(userResponse.height_max);
                        $('#min_height').val(userResponse.height_min);

                        $('#max_age').val(userResponse.age_max);
                        $('#min_age').val(userResponse.age_min);

                        $('#maritalStatus').val(userResponse.marital_statusPref);
                        $('#manglik_status').val(userResponse.manglikPref);
                        $('#foor_choice').val(userResponse.food_choicePref);
                        $('#min_income').val(userResponse.income_min);
                        $('#max_income').val(userResponse.income_max);
                        $('#user_denger').val(userResponse.genderCode_user);
                        $('#profileSendDay').val(userResponse.profile_sent_day);
                        var parsed_url = JSON.parse(userResponse.photo_url);
                        var mainImageHtml = '';
                        mainImageHtml +=
                            `<img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${parsed_url[0]}" class="w-75">`;
                        $('.imageDisplayArea').html(mainImageHtml);
                        $('.userCaste').text(userResponse.religion + ' : ' + userResponse.caste);
                        $('.userName').text(userResponse.name);
                        $('.monthlyIncomeUser').text((parseInt(userResponse.monthly_income)) +
                            ' L p/a');
                        $('.qualificationUser').text(userResponse.education);
                        $('.occupationUser').text('Occupation :' + userResponse.occupation);
                        $('.aboutUser').text(userResponse.about);
                        $('.userCity').text(userResponse.working_city);
                        $('.userHeight').text(userResponse.height_int);
                        $('.userWeight').text(userResponse.weight);
                        $('.genderUser').text(userResponse.gender);
                        $('.userMobile').text(userResponse.user_mobile);
                        if (userResponse.birth_date != null) {
                            function pad(s) {
                                return (s < 10) ? '0' + s : s;
                            }
                            var d = new Date(inputFormat)
                            let bDate = [pad(d.getDate()), pad(d.getMonth() + 1), d.getFullYear()].join(
                                '-')
                            $('.birthDateUser').text(bDate);
                        } else {
                            $('.birthDateUser').text('N.A.');
                        }

                        $('.foodChoiceUser').text(userResponse.food_choice);
                        $('.manglikUser').text(userResponse.manglik);
                        $('.maritalStatusUser').text(userResponse.marital_status);

                        // family details
                        $('.userUnmarriedBrothers').text(userResponse.unmarried_brothers);
                        $('.userUnmarriedSisters').text(userResponse.unmarried_sisters);
                        $('.userMarriedBrothers').text(userResponse.married_brothers);
                        $('.userMarriedSisters').text(userResponse.married_sisters);

                        $('.userFamilyType').text(userResponse.family_type);
                        $('.userHouseType').text(userResponse.house_type);
                        $('.fatherStatusUser').text(userResponse.father_status);
                        $('.motherStatusUser').text(userResponse.mother_status);

                    }
                });
            }
        });
    </script>
@endsection

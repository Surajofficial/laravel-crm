@section('page-title', 'Leads Management')
@extends('layouts.main-landingpage')
@section('page-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/2.0.0-alpha.2/cropper.min.css"
        integrity="sha512-6QxSiaKfNSQmmqwqpTNyhHErr+Bbm8u8HHSiinMEz0uimy9nu7lc/2NaXJiUJj2y4BApd5vgDjSHyLzC8nP6Ng=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Photo Profiles !</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pending Profiles</a></li>
                            <li class="breadcrumb-item active">Approve Pending Profiles</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <h4 class="header-title">Pending Profiles <span id="spinner_loading" style="display: none">Loading
                                Wait <div class="spinner-grow text-success"></div></span></h4>
                        <div class="col-md-12 row text-center">
                            <div class="col-md-3 row">
                                <button range="1-7"
                                    class="btn mb-2 col-md-12 btn-danger text-white btn-block filter">Last 7
                                    Days</button>
                                <button range="8-15" class="btn mb-2 col-md-12 btn-outline-danger btn-block filter">Last
                                    8-15 Days</button>
                                <button range="16-31" class="btn mb-2 col-md-12 btn-outline-danger btn-block filter">Last
                                    16-31 Days</button>
                            </div>
                            <div class="col-md-9 row display_message_countings">
                                <div class="col-md-3">
                                    <button
                                        class="btn mb-2 btn-danger text-white btn-outline-danger btn-block message_number"
                                        id="0">Message 0 : 283</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn mb-2 btn-outline-danger btn-block message_number"
                                        id="1">Message 1 :
                                        50</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn mb-2 btn-outline-danger btn-block message_number"
                                        id="2">Message 2 :
                                        60</button>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn mb-2 btn-outline-danger btn-block message_number"
                                        id="3">Message 3 :
                                        80</button>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn mb-2 btn-outline-danger btn-block btn_sendWhatsapp">Send
                                        Message</button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-12">
                            <table class="table table-striped table-inverse" id="approval_tble">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Religion</th>
                                        <th>Caste</th>
                                        <th>Gender</th>
                                        <th>Income</th>
                                        <th>Mobile</th>
                                        <th>Profile Complete %</th>
                                        <th>Last Seen</th>
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="load_lead_data">
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

    {{-- Add Lead modal Starts --}}
    <div class="modal fade" id="approveProfile" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Approve Profile</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('approveuserprofile') }}" id="addLeadForm" autocomplete="off"
                        class="form-horizontal was-validated">
                        <div id="progressbarwizard">
                            @csrf
                            <input type="number" class="d-none" name="user_data" id="user_data_id">
                            <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                <li class="nav-item">
                                    <a href="#profile-tab-1" data-bs-toggle="tab" data-toggle="tab" class="nav-link">
                                        <span class="number">1</span>
                                        <span class="d-none d-sm-inline">Personal</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-tab-2" data-bs-toggle="tab" data-toggle="tab" class="nav-link">
                                        <span class="number">2</span>
                                        <span class="d-none d-sm-inline">Professional</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-tab-3" data-bs-toggle="tab" data-toggle="tab" class="nav-link">
                                        <span class="number">3</span>
                                        <span class="d-none d-sm-inline">Family</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-tab-4" data-bs-toggle="tab" data-toggle="tab" class="nav-link">
                                        <span class="number">4</span>
                                        <span class="d-none d-sm-inline">Photo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profile-tab-5" data-bs-toggle="tab" data-toggle="tab" class="nav-link">
                                        <span class="number">5</span>
                                        <span class="d-none d-sm-inline">Preferences</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="tab-content b-0 pt-0 mb-0">

                                <div id="bar" class="progress mb-3" style="height: 7px;">
                                    <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 14.2857%;"></div>
                                </div>

                                <!-- end tab pane -->

                                {{-- Personal --}}
                                <div class="tab-pane active" id="profile-tab-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Managed By</label>
                                                <div class="col-md-3">
                                                    <select name="profile_creating_for" class="form-select"
                                                        id="profile_creating_for" required>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1"> Gender</label>
                                                <div class="col-md-3">
                                                    <select name="lead_gender" class="form-select" id="lead_gender"
                                                        required>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Full name</label>
                                                <div class="col-md-3">
                                                    <input type="text" id="full_name" name="full_name"
                                                        class="form-control" placeholder="Full Name" required>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1"> Food Choice</label>
                                                <div class="col-md-3">
                                                    <select name="food_choice" id="food_choice" class="form-select"
                                                        required>
                                                        <option value="">Select Food Choice</option>
                                                        <option value="2" selected>Non-Vegetarian</option>
                                                        <option value="1">Vegetarian</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname1">Religion</label>
                                                <div class="col-md-3">
                                                    <select name="religion" class="form-select" id="religion" required>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="surname1">Castes</label>
                                                <div class="col-md-3">
                                                    <select name="castes" class="form-select" id="castes">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="email1">Birth Date</label>
                                                <div class="col-md-3">
                                                    @php
                                                        $max_date = date('Y-m-d', strtotime('-18 years'));
                                                    @endphp

                                                    <input type="date" id="birth_date" name="birth_date"
                                                        class="form-control" max="{{ $max_date }}"
                                                        value="{{ $max_date }}" required>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="email1">Birth Time</label>
                                                <div class="col-md-3">
                                                    <input type="time" id="birth_time" name="birth_time"
                                                        class="form-control" value="{{ date('H:i:s') }}" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="email1">Height</label>
                                                <div class="col-md-3">
                                                    <select name="user_height" id="user_height" class="form-select"
                                                        required>
                                                        <option value="">Select Height</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="email1">Weight</label>
                                                <div class="col-md-3">
                                                    <input type="number" id="weight" name="weight"
                                                        class="form-control" value="60" required>
                                                </div>
                                            </div>
                                            <div class="row md-3">
                                                <label class="col-md-3 col-form-label" for="surname1"> Marital
                                                    Status</label>
                                                <div class="col-md-3">
                                                    <select name="marital_status" class="form-select" id="marital_status"
                                                        required>
                                                        <option value="Never Married">Never Married</option>
                                                        <option value="Awaiting Divorce">Awaiting Divorce</option>
                                                        <option value="Divorcee">Divorcee</option>
                                                        <option value="Widnowed">Widnowed</option>
                                                        <option value="Anulled">Anulled</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="surname1"> Manglik
                                                    Status</label>
                                                <div class="col-md-3">
                                                    <select name="manglik_status" class="form-select" id="manglik_status"
                                                        required>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row md-3 mt-3">
                                                <label class="col-md-3 col-form-label"for="isdisable">Is Disable</label>
                                                <div class="col-md-3">
                                                    <select name="is_disable"
                                                        class="form-select" id="is_disable" required>
                                                        <option value="1">Yes</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="disability">Disability</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="disability" id="disability" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row md-3 mt-3">
                                                <label class="col-md-3 col-form-label"for="citizenship">Citizenship</label>
                                                <div class="col-md-3">
                                                    <select name="citizenship"
                                                        class="form-select" id="citizenship" required>
                                                        <option value="indian">Indian</option>
                                                        <option value="nri">NRI</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="birth_place">Birth Place</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="birth_place" id="birth_place" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3 mt-3">
                                                <label class="col-md-3 col-form-label">Alternate Number1</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="alternate_number1" id="alternate_number1" class="form-control">
                                                </div>
                                                <label class="col-md-3 col-form-label">What's App Number</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="whatsapp_no" id="whatsapp_no" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Alternate Number2</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="alternate_number2" id="alternate_number2" class="form-control">
                                                </div>
                                                <label class="col-md-3 col-form-label">Email(Optional)</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="email" id="email" class="form-control">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled">
                                            {{-- <button type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Source</button> --}}
                                        </li>
                                        <li class="next list-inline-item float-end">
                                        <li class="next list-inline-item float-end">
                                            <button type="button" class="btn btn-success">Go To Professional Details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </li>
                                        </li>
                                    </ul>
                                </div>


                                {{-- Professional --}}
                                <div class="tab-pane" id="profile-tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Education</label>
                                                <div class="col-md-3">
                                                    <select name="education_list" class="form-select" id="education_list"
                                                        required>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1"> Occupation</label>
                                                <div class="col-md-3">
                                                    <select name="occupation_list" class="form-select"
                                                        id="occupation_list" required>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Wish To Go
                                                    Abroad</label>
                                                <div class="col-md-3">
                                                    <select name="wish_to_go_abroad" class="form-select"
                                                        id="wish_to_go_abroad">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Working
                                                    City</label>
                                                <div class="col-md-3 row">
                                                    <div class="col-md-12">
                                                        <input type="text" name="search_working_city"
                                                            autocomplete="off" class="form-control"
                                                            id="search_working_city">
                                                        <input type="text" name="current_city" readonly
                                                            class="form-control d-none" id="working_city">
                                                    </div>
                                                    <div class="col-md-12 cityListOptions">

                                                    </div>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="surname1">Yearly
                                                    Income</label>
                                                <div class="col-md-3">
                                                    <select name="yearly_income" class="form-select" id="yearly_income"
                                                        required>
                                                        @foreach ($income_range as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="surname1">About</label>
                                                <div class="col-md-9">
                                                    <textarea name="about_me" id="about_me" cols="10" rows="3" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="compName">Company Name</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="company_name" id="company_name" class="form-control" required>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="designation">Designation</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="designation" id="designation" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="collegeName">College Name</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="college_name" id="college_name" class="form-control" required>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="compName">Additional Degree</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="additional_degree" id="additional_degree" class="form-control" required>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->

                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled">
                                            <button type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Personal</button>
                                        </li>
                                        <li class="next list-inline-item float-end">
                                        <li class="next list-inline-item float-end">
                                            <button type="button" class="btn btn-success">Go To Family Details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Family --}}
                                <div class="tab-pane" id="profile-tab-3">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Gotra</label>
                                                <div class="col-md-3">
                                                    <input type="text" id="family_gotra" name="family_gotra"
                                                        class="form-control" placeholder="Gotra">
                                                </div>
                                                <label class="col-md-3 col-form-label" for="surname1">Family
                                                    Income</label>
                                                <div class="col-md-3">
                                                    <select name="family_income" class="form-select" id="family_income"
                                                        required>
                                                        @foreach ($income_range as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Father
                                                    Occupation</label>
                                                <div class="col-md-3">
                                                    <select name="father_status" id="father_status" class="form-select"
                                                        required>
                                                        <option value="">Select Father Status</option>

                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1"> Mother
                                                    Occupation</label>
                                                <div class="col-md-3">
                                                    <select name="mother_status" id="mother_status" class="form-select"
                                                        required>
                                                        <option value="">Select Father Status</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Brothers</label>
                                                <div class="col-md-3">
                                                    <input type="number" min="0" value="0"
                                                        class="form-control" name="brothers" id="brothers" required>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1"> Sisters</label>
                                                <div class="col-md-3">
                                                    <input type="number" min="0" value="0"
                                                        class="form-control" name="sisters" id="sisters" required>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> Married
                                                    Brothers</label>
                                                <div class="col-md-3">
                                                    <input type="number" value="0" class="form-control"
                                                        name="married_brothers" id="married_brothers">
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1">Married
                                                    Sisters</label>
                                                <div class="col-md-3">
                                                    <input type="number" value="0" class="form-control"
                                                        name="married_sisters" id="married_sisters">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="name1"> House Type</label>
                                                <div class="col-md-3">
                                                    <select name="house_type" id="house_type" class="form-select"
                                                        required>
                                                        <option value="">Select House Type</option>
                                                        <option value="1" selected>Owned</option>
                                                        <option value="2">Rented</option>
                                                        <option value="3">Leased</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="name1">Family Type</label>
                                                <div class="col-md-3">
                                                    <select name="family_type" id="family_type" class="form-select"
                                                        required>
                                                        <option value="">Select Family Type</option>
                                                        <option value="1" selected>Nuclear</option>
                                                        <option value="2">Joint</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label" for="familyCurrCity">Family Current City</label>
                                                <div class="col-md-3">
                                                    {{-- <input type="text" name="search_working_city" autocomplete="off" class="form-control" id="search_working_city"> --}}
                                                    {{-- <input type="text" name="current_city"  id="working_city"> --}}
                                                    <input type="text" name="family_current_city" class="form-control" id="family_current_city">
                                                    {{-- <div class="col-md-12 cityListOptions"></div> --}}
                                                </div>
                                                <label class="col-md-3 col-form-label" for="nativeCity">Native City</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="native_city" id="native_city" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Contact Address</label>
                                                <div class="col-md-9">
                                                    <textarea name="contact_address" id="contact_address" cols="10" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-md-3 col-form-label">Family About</label>
                                                <div class="col-md-9">
                                                    <textarea name="family_about" id="family_about" cols="10" rows="3" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled form_output">
                                            <button type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Profession</button>
                                        </li>
                                        <li class="next list-inline-item float-end btn_div">
                                            <button type="button" class="btn btn-success">Go To Photos <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>

                                {{-- Photo --}}
                                <div class="tab-pane" id="profile-tab-4">
                                    <div class="row">
                                        <div class="col-12 photo_viewer row">

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled form_output">
                                            <button type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Family</button>
                                        </li>
                                        <li class="next list-inline-item float-end btn_div">
                                            <button type="button" class="btn btn-success">Go To Preferences <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                {{-- preference --}}
                                <div class="tab-pane" id="profile-tab-5">
                                    <div class="row">
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label"
                                                for="surname1">Religion</label>
                                            <div class="col-md-3"> <select name="religion_preference"
                                                    class="form-select" id="religion_preference"> </select>
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1">
                                                Caste Preference</label>
                                            <div class="col-md-3"> <select class="form-select col-md-12 casteSelector"
                                                    multiple id="castes_pref" name="caste_perf_lists[]">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name1"> Min Age</label>
                                            <div class="col-md-3">
                                                <input type="number" name="min_age" id="min_age"
                                                    class="form-control">
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1"> Max Age</label>
                                            <div class="col-md-3">
                                                <input type="number" name="max_age" id="max_age"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name1"> Min Height</label>
                                            <div class="col-md-3">
                                                <input type="number" name="min_height" id="min_height"
                                                    class="form-control">
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1"> Max Height</label>
                                            <div class="col-md-3">
                                                <input type="number" name="max_height" id="max_height"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name1"> Min Income</label>
                                            <div class="col-md-3">
                                                <select name="min_income" id="min_income" class="form-select">
                                                    @foreach ($income_range as $annual_income)
                                                        <option value="{{ $annual_income[0] }}">
                                                            {{ $annual_income[1] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1"> Max Income</label>
                                            <div class="col-md-3">
                                                <select name="max_income" id="max_income" class="form-select">
                                                    @foreach ($income_range as $annual_income)
                                                        <option value="{{ $annual_income[0] }}">
                                                            {{ $annual_income[1] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name1"> Manglik</label>
                                            <div class="col-md-3">
                                                <select name="manglik_pref" id="manglik_pref"
                                                    class="form-select"></select>
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1"> Food Choice</label>
                                            <div class="col-md-3">
                                                <select name="foodchoice_pref" id="foodchoice_pref" class="form-select">
                                                    <option value="0">Doesn't Matter</option>
                                                    <option value="1">Non Vegetarial</option>
                                                    <option value="2">Vegetarial</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label" for="name1"> Marital Status</label>
                                            <div class="col-md-3">
                                                <select name="marital_status_perf" id="marital_status_perf"
                                                    class="form-select">
                                                </select>
                                            </div>
                                            <label class="col-md-3 col-form-label" for="name1">Occupation</label>
                                            <div class="col-md-3">
                                                <select name="occupation_status_perf" id="occupation_status_perf"
                                                    class="form-select">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row md-3 mt-2">
                                            <label class="col-md-3 col-form-label">Citizenship Preference</label>
                                            <div class="col-md-3">
                                                <select name="citizenship_pref"
                                                    class="form-select" id="citizenship_pref" required>
                                                    <option value="indian">Indian</option>
                                                    <option value="nri">NRI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div> <!-- end row -->
                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled form_output">
                                            <button type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i>
                                                Back to Photos</button>
                                        </li>
                                        <li class="next list-inline-item float-end btn_div">
                                            <button type="submit" name="submit"
                                                class="btn btn-success">Approve</button>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- tab-content -->
                        </div> <!-- end #progressbarwizard-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Lead Modal Ends --}}

    {{-- add photos modal starts --}}

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


    {{-- add photos modal ends --}}


    <style>
        #slider-div {
            display: flex;
            flex-direction: row;
            margin-top: 30px;
        }

        #slider-div>div {
            margin: 8px;
        }

        .slider-label {
            position: absolute;
            background-color: #eee;
            padding: 4px;
            font-size: 0.75rem;
        }

        .cropper-container {
            margin: 0 auto 20px auto;
        }
    </style>

@endsection
@section('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/11.0.2/bootstrap-slider.min.js"
        integrity="sha512-f0VlzJbcEB6KiW8ZVtL+5HWPDyW1+nJEjguZ5IVnSQkvZbwBt2RfCBY0CBO1PsMAqxxrG4Di6TfsCPP3ZRwKpA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/2.0.0-alpha.2/cropper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script>
        // load castes
        loadAllCastes();

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
                    //$('#castes_pref').html(caste_html);
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


        $(document).ready(function() {
            $('.loader').hide();
            // cropper js started

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

            $('.js-save-cropped-avatar').on('click', function(event) {
                event.preventDefault();
                $('.loader').show();
                var $button = $(this);
                $button.text('uploading...');
                $button.prop('disabled', true);

                const canvas = cropper.getCroppedCanvas();
                const base64encodedImage = canvas.toDataURL();
                $('#user_imagesixfour').val(base64encodedImage);
                $('#avatar-crop').attr('src', base64encodedImage);
                $.ajax({
                    url: "{{ route('uploaduserimage') }}",
                    type: "post",
                    data: {
                        "user_id": $('#user_id_photo').val(),
                        "user_image": base64encodedImage,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(updateImageResponse) {
                        $('.loader').hide();
                        $('.js-save-cropped-avatar').text('Save and Upload');
                        $('.js-save-cropped-avatar').prop('disabled', false);
                        window.setTimeout(function() {
                            cropper.destroy();
                            $(cropperModalId).modal('hide');
                        }, 300);
                    }
                })

            });
            // cropper js ends

            // upload image to server ends

            $('#search_lead_modal').modal('show');

            var some_id = $('#search_working_city');
            some_id.prop('type', 'text');
            some_id.removeAttr('autocomplete');

            /***** data loading and sending whatsapp message starts ******/
            $(document).on('click', '.btn_sendWhatsapp', function(e) {
                e.preventDefault();
                $('.whatsapp_div').html(
                    '<button class="btn btn-primary" type="button" disabled><span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Sending...</button>'
                );
                $.ajax({
                    type: "post",
                    url: "{{ route('sendmessageall') }}",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        'range': localStorage.getItem('range'),
                        'message_number': localStorage.getItem('message_number'),
                        'range': localStorage.getItem('range')
                    },
                    success: function(whatsapp_response) {
                        if (whatsapp_response.type == true) {
                            $('.whatsapp_div').html(
                                '<div class="alert alert-success" role="alert"><strong>' +
                                whatsapp_response.message + '</strong></div>');
                            countMessageNos("1-7");
                        } else {
                            $('.whatsapp_div').html(
                                '<div class="alert alert-danger" role="alert"><strong>' +
                                whatsapp_response.message + '</strong></div>');
                        }
                        window.setTimeout(function() {
                            $('.whatsapp_div').html(
                                '<button type="button" class="btn btn-warning btn_sendWhatsapp">Send Message</button>'
                            );
                        }, 2000);
                    }
                });
            });

            $(document).on('click', '.filter', function(e) {
                e.preventDefault();
                $('.filter').removeClass('btn-danger text-white');
                $('.filter').addClass('btn-outline-primary text-danger');
                $(this).removeClass('btn-outline-primary');
                $(this).addClass('btn-danger text-white');
                var date_range = $(this).attr('range');
                localStorage.setItem('range', date_range);
                table_data.ajax.reload();
                countMessageNos($(this).attr('range'));
            });

            $(document).on('click', '.message_number', function(e) {
                e.preventDefault();
                $('.message_number').removeClass('btn-danger text-white');
                $('.message_number').addClass('btn-outline-danger');
                $(this).removeClass('btn-outline-danger');
                $(this).addClass('btn-danger text-white');
                localStorage.setItem('message_number', $(this).attr('id'));
                table_data.ajax.reload();
            });

            // count message nos
            localStorage.setItem('range', '1-7');
            localStorage.setItem('message_number', '0');
            countMessageNos("1-7");

            function countMessageNos(dayRange) {
                $('.loader').show();
                $('.display_message_countings').html('<div class="spinner-grow text-danger text-center"></div>');
                msg_html = '';
                message_type = localStorage.getItem('message_number');
                $.ajax({
                    url: "{{ route('getmessagecounts') }}",
                    type: "get",
                    data: {
                        "day_range": dayRange,
                        'message_type': message_type
                    },
                    success: function(message_count_response) {
                        $('.loader').hide();
                        var span_text = ["Not Sent : ", "Message 0 : ", "Message 1 : ", "Message 2 : "];
                        var class_name = '';
                        msg_html += `<div class="col-md-12 row">`;
                        for (let i = 0; i < message_count_response.counting.length; i++) {
                            const texts = message_count_response.counting[i];
                            if (i == 0) {
                                class_name = 'btn-danger';
                            } else {
                                class_name = 'btn-outline-danger';
                            }
                            msg_html += `<div class="col-md-3">
                                        <button class="btn btn-sm ${class_name} message_number" id="${texts.messege_send_count}">Message :${texts.messege_send_count} ${texts.count}</button>
                            </div>`;
                        }
                        msg_html +=
                            `<div class="col-md-12">
                                    <button
                                        class="btn mb-2 btn-outline-success btn-block btn_sendWhatsapp">Send
                                        Message</button>
                                </div>`;
                        $('.display_message_countings').html(msg_html);
                    }
                });
            }


            /************* data loading and sending whatsapp message ends *************/

            // select gender automatically
            $(document).on('change', '#profile_creating_for', function() {
                if ($(this).val() == "4,Sister" || $(this).val() == "2,Mother" || $(this).val() ==
                    "7,Daughter") {
                    $('#lead_gender').val(2);
                    $('#lead_gender').prop("disabled", true);
                } else if ($(this).val() == "3,Father" || $(this).val() == "5,Brother" || $(this).val() ==
                    "6,Son") {
                    $('#lead_gender').val(1);
                    $('#lead_gender').prop("disabled", true);
                } else {
                    $('#lead_gender').val(1);
                    $('#lead_gender').prop("disabled", false);
                }
            });

            // load approval table
            var table_data = $('#approval_tble').DataTable({
                "order": [
                    [1, "asc"]
                ],
                "processing": true,
                "ajax": {
                    "url": "{{ route('dayrangewisedata') }}",
                    "type": "get",
                    "data": function(d) {
                        d.day_range = localStorage.getItem("range");
                        d.message_type = localStorage.getItem("message_number");
                    }
                },
                "columns": [{
                        data: 'name',
                    },
                    {
                        data: 'religion',
                    },
                    {
                        data: 'caste',
                    },
                    {
                        data: 'gender',
                    },
                    {
                        data: null,
                        render: function(data) {
                            if (data.annual_income > 10) {
                                return (parseFloat(data.annual_income) / 100000).toFixed(2) + "LPA";
                            } else {
                                return data.annual_income + "LPA";
                            }
                        }
                    },
                    {
                        data: 'mobile',
                    },
                    {
                        data: 'profile_percent',
                    },
                    {
                        data: 'last_seen',
                    },
                    {
                        data: 'created_at',
                    },
                    {
                        data: null,
                        render: function(data) {
                            var btnData = `<button
                                    data-toggle="tooltip" data-placement="top" title="Created At : ${data.created_at}"
                                    lead_id="${data.lead_id}"
                                    user_id="${data.user_id}"
                                    class="btn btn-primary btn-sm checkNUpdate">
                                    <span style="color: white;">Check & Approve</span>
                                </button>
                                <p> https://hansmatrimony.com/fourReg/fullPage/edit/${data.lead_id}/1</p>
                                <button type="button" class="btn btn-sm btn-danger rejectProfile" userId="${data.user_id}">Reject</button>
                                  <input type="file" name="photo" accept="image/*" class="js-photo-upload" userId="${data.user_id}">
                                `;
                            return btnData;
                        },
                        bsortable: false,
                    }
                ]
            });

            /*
             <button type="button" class="btn btn-sm btn-warning addPhotos" userId="${data.lead_id}">Add Photos</button>
            */
            $(document).on('click', '.rejectProfile', function(e) {
                e.preventDefault();
                if (confirm("Are You Sure To Reject")) {
                    $.ajax({
                        url: "{{ route('rejectuserprofile') }}",
                        type: "get",
                        data: {
                            "user_id": $(this).attr('userid')
                        },
                        success: function(rejectResponse) {
                            alert(rejectResponse.message);
                            table_data.ajax.reload();
                        }
                    });
                }
            });

            /*$(document).on('click','.btn_sendWhatsapp', function(e){
                e.preventDefault();
                $.ajax({
                    url : "{{ route('sendWhatsAppMessageCommon') }}" ,
                    type : "get",
                    data : {
                        "range":localStorage.getItem('range'),
                        'message_no':localStorage.getItem('message_number')
                    },
                    success : function(responseMessage){
                        alert(rejectResponse.message);
                        table_data.ajax.reload();
                    }
                });
            });*/

            $(document).on('click', '.checkNUpdate', function(e) {
                e.preventDefault();
                $('.loader').show();
                $('#user_data_id').val($(this).attr('user_id'));
                $.ajax({
                    type: "get",
                    url: "{{ route('getuserdatabyid') }}",
                    data: {
                        "user_id": $(this).attr('user_id'),
                        "lead_id": $(this).attr('lead_id')
                    },
                    success: function(userResponse) {
                        $('.loader').hide();
                        $('#approveProfile').modal('show');
                        $("#profile_creating_for").val(userResponse.relationCode);
                        $("#lead_gender").val(userResponse.genderCode_user);
                        $("#full_name").val(userResponse.name);
                        $("#religion").val(userResponse.religionCode);
                        $("#castes").val(userResponse.casteCode_user);

                        if (userResponse.birth_date != undefined) {
                            var nBdate = userResponse.birth_date.split(" ");
                            $("#birth_date").val(nBdate[0]);
                        }

                        $("#marital_status").val(userResponse.maritalStatusCode);
                        $("#user_height").val(userResponse.height_int);
                        $("#weight").val(userResponse.weight);

                        if (userResponse.educationCode_user != null) {
                            $("#education_list").val(userResponse.educationCode_user);
                        }

                        if (userResponse.occupationCode_user != null) {
                            $("#occupation_list").val(userResponse.occupationCode_user);
                        }

                        if (userResponse.working_city != null) {
                            $("#search_working_city").val(userResponse.working_city);
                        }

                        if (userResponse.height_int != null) {
                            $("#user_height").val(userResponse.height_int);
                        }

                        if (userResponse.weight != null) {
                            $("#weight").val(userResponse.weight);
                        }

                        if (userResponse.manglikCode != null) {
                            $("#manglik_status").val(userResponse.manglikCode);
                        }

                        if (userResponse.wishing_to_settle_abroad != null) {
                            $("#wish_to_go_abroad").val(userResponse.wishing_to_settle_abroad);
                        }

                        if (userResponse.monthly_income != null) {
                            $("#yearly_income").val(userResponse.monthly_income);
                        }
                        //  family details
                        if (userResponse.gotra != null) {
                            $("#family_gotra").val(userResponse.gotra);
                        }

                        if (userResponse.family_income != null) {
                            $("#family_income").val(userResponse.family_income);
                        }

                        if (userResponse.father_statusCode != null) {
                            $("#father_status").val(userResponse.father_statusCode);
                        }

                        if (userResponse.mother_statusCode != null) {
                            $("#mother_status").val(userResponse.mother_statusCode);
                        }
                        //"unmarried_sisters":0,"married_sisters":0,
                        // "unmarried_brothers":0,"married_brothers":0
                        if (userResponse.unmarried_brothers != null) {
                            $("#brothers").val(userResponse.unmarried_brothers);
                        }

                        if (userResponse.unmarried_sisters != null) {
                            $("#sisters").val(userResponse.unmarried_sisters);
                        }

                        if (userResponse.married_brothers != null) {
                            $("#married_brothers").val(userResponse.married_brothers);
                        }

                        if (userResponse.married_sisters != null) {
                            $("#married_sisters").val(userResponse.married_sisters);
                        }

                        if (userResponse.houseTypeCode != null) {
                            $("#house_type").val(userResponse.houseTypeCode);
                        }

                        if (userResponse.familyTypeCode != null) {
                            $("#family_type").val(userResponse.familyTypeCode);
                        }

                        var iamgeData = userResponse.user_photos;
                        var photoHtml = '';
                        $('.photo_viewer').html('');
                        for (let f = 0; f < iamgeData.length; f++) {
                            const imageElement = iamgeData[f];
                            if (imageElement.photo_status == "active" || imageElement
                                .photo_status == "pending") {
                                photoHtml += `<div class="mb-3 col-md-3 p-1 text-center imageDiv${userResponse.id}${f}">
                                <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${imageElement.photo_url}" class="w-100 rounded">
                                <button class="btn btn-sm btn-warning btnDelPic" userId="${userResponse.id}" indexPic="${imageElement.id}">Delete</button>
                            </div>`;
                            }
                        }
                        $('.photo_viewer').html(photoHtml);
                        $('.rejectButton').attr("userId", $(this).attr('user_id'));

                        $('#caste_perf_lists').val(userResponse.userpreference.castePref);
                        $('#religion_preference').val(userResponse.userpreference.regionPref[
                            0]);

                        $('#min_age').val(userResponse.userpreference.age_min ?? 21);
                        $('#max_age').val(userResponse.userpreference.age_max ?? 35);

                        $('#min_height').val(userResponse.userpreference.height_min_s ?? 60);
                        $('#max_height').val(userResponse.userpreference.height_max_s ?? 72);

                        $('#min_income').val(userResponse.userpreference.income_min);
                        $('#max_income').val(userResponse.userpreference.income_max ?? 1.25);

                        $('#marital_status_perf').val(userResponse.userpreference
                            .marital_statusPref ?? 2);

                        $('#foodchoice_pref').val(userResponse.userpreference.food_choicePref ??
                            0);
                        $('#occupation_status_perf').val(userResponse.userpreference
                            .workingPref ?? 1);
                    }
                });
            });

            /*$(document).on('click', '.addPhotos', function(e) {
                e.preventDefault();
                var userId = $(this).attr('userid');
                $('#user_id_photo').val(userId);
                $('#uploadphotosModal').modal('show');
            });*/

            $(document).on('submit', '#addLeadForm', function(e) {
                e.preventDefault();
                $('.btn_div').text(`Please Wait...............`);
                $.ajax({
                    url: $(this).attr('action'),
                    type: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(submitResponse) {
                        var messageHtml = ``;
                        if (submitResponse.type == true) {
                            messageHtml +=
                                `<div class="alert alert-success" role="alert"><strong>Message !</strong> ${submitResponse.message}</div>`;
                            $('#addLeadForm')[0].reset();
                            window.setTimeout(function() {
                                $('.form_output').html('');
                                table_data.ajax.reload();
                                $('#approveProfile').modal('hide');
                            }, 2000);
                        } else {
                            messageHtml +=
                                `<div class="alert alert-danger" role="alert"><strong>Message !</strong> ${submitResponse.message}</div>`;
                        }
                        $('.btn_div').html(
                            `<button type="submit" name="submit" class="btn btn-success">Approve</button>`
                        );
                        $('.form_output').html(messageHtml);
                    }
                });
            });

            // delete profile pic
            $(document).on('click', '.btnDelPic', function(e) {
                e.preventDefault();
                if (confirm("Are You Sure To Delete?")) {
                    var userId = $(this).attr('userId');
                    var userPicIndex = $(this).attr('indexPic');
                    var messageHtml = '';
                    $.ajax({
                        url: "{{ route('deleteuserpic') }}",
                        type: "post",
                        data: {
                            "user_id": userId,
                            "index_no": userPicIndex,
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function(delPicResp) {
                            $('.form_output').text('Please Wait.........');
                            if (delPicResp.type == true) {
                                $('.picDiv' + userId + userPicIndex + '').remove();
                                messageHtml +=
                                    `<div class="alert alert-danger" role="alert"><strong>Message !</strong> ${delPicResp.message}</div>`;
                                $('.imageDiv' + userId + userPicIndex).hide();
                            } else {
                                messageHtml +=
                                    `<div class="alert alert-danger" role="alert"><strong>Message !</strong> ${delPicResp.message}</div>`;
                            }
                            $('.form_output').html(messageHtml);
                            window.setTimeout(function() {
                                $('.form_output').html('');
                            }, 2500);
                        }
                    });
                }
            });


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


            $(document).on('keyup', '#search_working_city', function() {
                if ($(this).val().length > 2) {
                    if ($(this).val().length >= 3) {
                        var cities_lsit = getCitiesName($(this).val());
                    }

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
                'income_range'(city_name);
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
        });
    </script>
@endsection

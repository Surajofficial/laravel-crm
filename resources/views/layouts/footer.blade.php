@php
    $income_ranges = config('constants.income_ranges');
@endphp
<!-- Right Sidebar -->
<div class="right-bar">
    <div data-simplebar class="h-100">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-bordered nav-justified" role="tablist">
            <li class="nav-item"> <a class="nav-link py-2" data-bs-toggle="tab" href="#chat-tab" role="tab"> <i
                        class="mdi mdi-message-text-outline d-block font-22 my-1"></i> </a> </li>
            <li class="nav-item"> <a class="nav-link py-2" data-bs-toggle="tab" href="#tasks-tab" role="tab"> <i
                        class="mdi mdi-format-list-checkbox d-block font-22 my-1"></i> </a> </li>
            <li class="nav-item"> <a class="nav-link py-2 active" data-bs-toggle="tab" href="#settings-tab"
                    role="tab"> <i class="mdi mdi-cog-outline d-block font-22 my-1"></i> </a> </li>
        </ul> <!-- Tab panes -->
        <div class="tab-content pt-0">
            <div class="tab-pane" id="chat-tab" role="tabpanel">
                <form class="search-bar p-3">
                    <div class="position-relative"> <input type="text" class="form-control" placeholder="Search...">
                        <span class="mdi mdi-magnify"></span>
                    </div>
                </form>
                <h6 class="fw-medium px-3 mt-2 text-uppercase">Group Chats</h6>
                <div class="p-2"> <a href="javascript: void(0);"
                        class="text-reset notification-item ps-3 mb-2 d-block"> <i
                            class="mdi mdi-checkbox-blank-circle-outline me-1 text-success"></i> <span
                            class="mb-0 mt-1">App Development</span> </a> <a href="javascript: void(0);"
                        class="text-reset notification-item ps-3 mb-2 d-block"> <i
                            class="mdi mdi-checkbox-blank-circle-outline me-1 text-warning"></i> <span
                            class="mb-0 mt-1">Office Work</span> </a> <a href="javascript: void(0);"
                        class="text-reset notification-item ps-3 mb-2 d-block"> <i
                            class="mdi mdi-checkbox-blank-circle-outline me-1 text-danger"></i> <span
                            class="mb-0 mt-1">Personal Group</span> </a> <a href="javascript: void(0);"
                        class="text-reset notification-item ps-3 d-block"> <i
                            class="mdi mdi-checkbox-blank-circle-outline me-1"></i> <span
                            class="mb-0 mt-1">Freelance</span> </a> </div>
                <h6 class="fw-medium px-3 mt-3 text-uppercase">Favourites <a href="javascript: void(0);"
                        class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>
                <div class="p-2"> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status"></span> <img
                                    src="{{ url('/images/users/avatar-10.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Andrew Mackie</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status"></span> <img
                                    src="{{ url('/images/users/avatar-1.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Rory Dalyell</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To an English person, it will seem like simplified
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status busy"></span> <img
                                    src="{{ url('/images/users/avatar-9.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jaxon Dunhill</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                </div>
                            </div>
                        </div>
                    </a> </div>
                <h6 class="fw-medium px-3 mt-3 text-uppercase">Other Chats <a href="javascript: void(0);"
                        class="font-18 text-danger"><i class="float-end mdi mdi-plus-circle"></i></a></h6>
                <div class="p-2 pb-4"> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status online"></span> <img
                                    src="{{ url('/images/users/avatar-2.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Jackson Therry</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status away"></span> <img
                                    src="{{ url('/images/users/avatar-4.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Charles Deakin</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status online"></span> <img
                                    src="{{ url('/images/users/avatar-5.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Ryan Salting</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">If several languages coalesce the grammar of the
                                        resulting.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status online"></span> <img
                                    src="{{ url('/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Sean Howse</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status busy"></span> <img
                                    src="{{ url('/images/users/avatar-7.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Dean Coward</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                </div>
                            </div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset notification-item">
                        <div class="d-flex align-items-start">
                            <div class="position-relative me-2"> <span class="user-status away"></span> <img
                                    src="{{ url('/images/users/avatar-8.jpg') }}" class="rounded-circle avatar-sm"
                                    alt="user-pic"> </div>
                            <div class="flex-1 overflow-hidden">
                                <h6 class="mt-0 mb-1 font-14">Hayley East</h6>
                                <div class="font-13 text-muted">
                                    <p class="mb-0 text-truncate">One could refuse to pay expensive translators.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="text-center mt-3"> <a href="javascript:void(0);" class="btn btn-sm btn-white"> <i
                                class="mdi mdi-spin mdi-loading me-2"></i> Load more </a> </div>
                </div>
            </div>
            <div class="tab-pane" id="tasks-tab" role="tabpanel">
                <h6 class="fw-medium p-3 m-0 text-uppercase">Working Tasks</h6>
                <div class="px-2"> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">App Development<span class="float-end">75%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Database Repair<span class="float-end">37%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 37%"
                                aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Backup Create<span class="float-end">52%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 52%"
                                aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> </div>
                <h6 class="fw-medium px-3 mb-0 mt-4 text-uppercase">Upcoming Tasks</h6>
                <div class="p-2"> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Sales Reporting<span class="float-end">12%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 12%"
                                aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">Redesign Website<span class="float-end">67%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%"
                                aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> <a href="javascript: void(0);" class="text-reset item-hovered d-block p-2">
                        <p class="text-muted mb-0">New Admin Design<span class="float-end">84%</span></p>
                        <div class="progress mt-2" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 84%"
                                aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </a> </div>
                <div class="d-grid p-3 mt-2"> <a href="javascript: void(0);"
                        class="btn btn-success waves-effect waves-light">Create Task</a> </div>
            </div>
            <div class="tab-pane active" id="settings-tab" role="tabpanel">
                <h6 class="fw-medium px-3 m-0 py-2 font-13 text-uppercase bg-light"> <span class="d-block py-1">Theme
                        Settings</span> </h6>
                <div class="p-3">
                    <div class="alert alert-warning" role="alert"> <strong>Customize </strong> the overall color
                        scheme, sidebar menu, etc. </div>
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input tmeheSwitcher"
                            type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check">
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input tmeheSwitcher"
                            type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check"> <label
                            class="form-check-label" for="dark-mode-check">Dark Mode</label> </div> <!-- Width -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="width" value="fluid" id="fluid-check" checked> <label class="form-check-label"
                            for="fluid-check">Fluid</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="width" value="boxed" id="boxed-check"> <label class="form-check-label"
                            for="boxed-check">Boxed</label> </div> <!-- Topbar -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="topbar-color" value="dark" id="darktopbar-check" checked> <label
                            class="form-check-label" for="darktopbar-check">Dark</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="topbar-color" value="light" id="lighttopbar-check"> <label
                            class="form-check-label" for="lighttopbar-check">Light</label> </div>
                    <!-- Menu positions -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus Positon <small>(Leftsidebar and
                            Topbar)</small></h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="menus-position" value="fixed" id="fixed-check" checked> <label
                            class="form-check-label" for="fixed-check">Fixed</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="menus-position" value="scrollable" id="scrollable-check"> <label
                            class="form-check-label" for="scrollable-check">Scrollable</label> </div>
                    <!-- Left Sidebar-->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-color" value="light" id="light-check" checked> <label
                            class="form-check-label" for="light-check">Light</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-color" value="dark" id="dark-check"> <label class="form-check-label"
                            for="dark-check">Dark</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-color" value="brand" id="brand-check"> <label
                            class="form-check-label" for="brand-check">Brand</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-color" value="gradient" id="gradient-check"> <label
                            class="form-check-label" for="gradient-check">Gradient</label> </div> <!-- size -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-size" value="default" id="default-size-check" checked> <label
                            class="form-check-label" for="default-size-check">Default</label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-size" value="condensed" id="condensed-check"> <label
                            class="form-check-label" for="condensed-check">Condensed <small>(Extra Small
                                size)</small></label> </div>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-size" value="compact" id="compact-check"> <label
                            class="form-check-label" for="compact-check">Compact <small>(Small
                                size)</small></label> </div> <!-- User info -->
                    <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>
                    <div class="form-check form-switch mb-1"> <input class="form-check-input" type="checkbox"
                            name="leftsidebar-user" value="fixed" id="sidebaruser-check"> <label
                            class="form-check-label" for="sidebaruser-check">Enable</label> </div>
                    <div class="d-grid mt-4"> <button class="btn btn-primary" id="resetBtn">Reset to
                            Default</button> </div>
                </div>
            </div>
        </div>
    </div> <!-- end slimscroll-menu-->
</div>
{{-- payment link modal starts --}}
<div class="modal fade" id="paymentLinkModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Payment Link</h5> <button type="button" class="btn-close"
                    data-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('genpaymentlink') }}" method="post" id="generatePaymentLinkForm"> @csrf
                    <div class="form-group mb-2"> <label for="">User Mobile</label> <input type="number"
                            class="form-control" name="user_mobile"> </div>
                    <div class="form-group mb-2"> <label for="">User Email</label> <input type="email"
                            class="form-control" name="user_email"> </div>
                    <div class="form-group mb-2"> <label for="">Plan</label> <select name="user_plan"
                            id="user_plan" class="form-select"> </select> </div>
                    <div class="form-group mb-2"> <label for="">Payment Amount</label> <input type="number"
                            class="form-control" name="payment_amount"> </div>
                    <div class="form-group mb-2"> <label for="">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-2 formOutputMessage"> </div>
                    <div class="form-group mb-2 float-end btnDiv"> <button
                            class="btn btn-sm btn-success">Generate</button> </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- payment link modal ends --}}

{{-- checkin modal --}}
<div class="modal fade" id="check-in-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Check In!</h5> <button type="button" class="btn-close" data-dismiss="modal"
                    aria-label="Close"> </button>
            </div>
            <div class="modal-body text-center">
                <div class="form-group text-warning mb-4"> <img src="{{ url('/images/warning-animated.gif') }}"
                        alt="" width="110px;"> </div>
                <div class="form-group">
                    <p class="text-danger">Click on checkin to prevent yourself from autologout!!!</p>
                </div>
                <div class="row">
                    <div class="col-md-6"> <button type="button"
                            class="btn btn-info btn-rounded waves-effect waves-light check-in-button">Check
                            In</button> </div>
                    <div class="col-md-6"> <button type="button"
                            class="btn btn-danger btn-rounded waves-effect waves-light modal-cancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- chckin modal ends --}}


@if (
    ((Route::is('database') || Route::is('mydatabsecrm')) &&
        (Auth::user()->role == config('constants.roles_ineger')['relationship_mananger'] ||
            Auth::user()->role == config('constants.roles_ineger')['approvals'] ||
            Auth::user()->role == config('constants.roles_ineger')['customer_support'])) ||
        Auth::user()->role == config('constants.roles_ineger')['telesales']
)
    {{-- search lead modal starts --}}
    <div class="modal fade" id="search_lead_modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title text-white">Search Profile</h5> <button type="button"
                        class="btn-close text-white" data-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4"> <select name="select_search_type" id="select_search_type"
                                class="form-select">
                                <option value="1">Search By Mobile</option>
                                <option value="2">Search By Name</option>
                            </select> </div>
                        <div class="col-4"> <input type="number" class="form-control" name="search_mobile_number"
                                id="search_mobile_number" placeholder="Mobile Number" autocomplete="Off"> </div>
                        <div class="col-4 mt-1 search_btn_div"> <button
                                class="btn btn-purple btn-rounded btn-sm waves-effect waves-light search_lead_mobile"><i
                                    class="fas fa-search    "></i></button> </div>
                        <div class="col-12 search_details" style="height: 50vh; overflow:scroll;"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- search lead modal ends --}}

    <!-- User Details Modal starts -->
    <div class="modal fade" id="userDetailsModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Details</h5> <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"></button>
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
                                                        <div class="carousel-inner mainImage"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div>
                                                <div><span class="text-primary userCaste"></span></div>
                                                <h4 class="mb-1 userName"></h4>
                                                <div class="mt-3">
                                                    <h6 class="text-danger text-uppercase monthlyIncomeUser"></h6>
                                                    <h4>Education : <span
                                                            class="text-muted me-2 qualificationUser"><del></del></span>
                                                        <b class="occupationUser"></b>
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
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Family City : <span class="cityFamily"></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <ul class="list-unstyled product-desc-list">
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Brith Date : <span
                                                                            class="birthDateUser"></span> </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Food Choice : <span
                                                                            class="foodChoiceUser"></span> </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Manglik : <span class="manglikUser"></span>
                                                                    </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Marital Status : <span
                                                                            class="maritalStatusUser"></span> </li>
                                                                    <li><i
                                                                            class="mdi mdi-circle-medium me-1 align-middle"></i>
                                                                        Birth Place : <span class="workingCity"></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end row -->
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title mb-4">Other Details</h4>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item"> <a href="#profile_family" data-bs-toggle="tab"
                                                        aria-expanded="false" class="nav-link active"> <span
                                                            class="d-inline-block d-sm-none"><i
                                                                class="mdi mdi-home-variant"></i></span> <span
                                                            class="d-none d-sm-inline-block">Family Detail</span>
                                                    </a> </li>
                                                <li class="nav-item"> <a href="#profile_preferences"
                                                        data-bs-toggle="tab" aria-expanded="true"
                                                        class="nav-link preferenceDetailsNav"> <span
                                                            class="d-inline-block d-sm-none"><i
                                                                class="mdi mdi-account"></i></span> <span
                                                            class="d-none d-sm-inline-block">Preferences</span>
                                                    </a> </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="profile_family">
                                                    <table class="table table-bordered table-centered mb-0">
                                                        <tr>
                                                            <th>Unmarried Brother</th>
                                                            <th>Unmarried Sister</th>
                                                            <th>Married Brother</th>
                                                            <th>Married Sister</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="userUnmarriedBrothers"></td>
                                                            <td class="userUnmarriedSisters"></td>
                                                            <td class="userMarriedBrothers"></td>
                                                            <td class="userMarriedSisters"></td>
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
                                                <div class="tab-pane" id="profile_preferences">
                                                    <table class="table table-striped table-inverse">
                                                        <tr>
                                                            <div class="row">
                                                                <div class="col-sm-4"><strong>Height</strong> :
                                                                    <span class="minheight_txt"></span> - <span
                                                                        class="maxheight_txt"></span>
                                                                </div>
                                                                <div class="col-sm-4"><strong>Income</strong> :
                                                                    <span class="min_income_pref"></span> - <span
                                                                        class="max_income_pref"></span>
                                                                </div>
                                                                <div class="col-sm-4"><strong>Age</strong> : <span
                                                                        class="min_age_pref"></span> - <span
                                                                        class="max_age_pref"></span></div>
                                                                <div class="col-sm-4"></div>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <th>Caste</th>
                                                            <td colspan="3" class="caste_prefs"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Marital Status</th>
                                                            <td class="marital_status_pref"></td>
                                                            <th>Manglik</th>
                                                            <td class="manglik_pref"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Citizenship</th>
                                                            <td class="citizenship_pref" colspan="3"></td>
                                                        </tr>
                                                        <tr>
                                                            <th>State</th>
                                                            <td class="state_pref"></td>
                                                            <th>Country</th>
                                                            <td class="coutnry_pref"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="d-flex mt-2 float-end approve_button"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- user etails modal ends --}}

    {{-- Update User Details modal Starts --}}
    <div class="modal fade" id="approveProfile" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">Edit Profile</h5> <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('approveuserprofile') }}" id="addLeadForm"
                        autocomplete="off" class="form-horizontal was-validated">
                        <div id="progressbarwizard"> @csrf <input type="number" class="d-none" name="user_data"
                                id="user_data_id">
                            <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                <li class="nav-item"> <a href="#profile-tab-1" data-bs-toggle="tab"
                                        data-toggle="tab" class="nav-link"> <span class="number">1</span> <span
                                            class="d-none d-sm-inline">Personal</span> </a> </li>
                                <li class="nav-item"> <a href="#profile-tab-2" data-bs-toggle="tab"
                                        data-toggle="tab" class="nav-link"> <span class="number">2</span> <span
                                            class="d-none d-sm-inline">Professional</span> </a> </li>
                                <li class="nav-item"> <a href="#profile-tab-3" data-bs-toggle="tab"
                                        data-toggle="tab" class="nav-link"> <span class="number">3</span> <span
                                            class="d-none d-sm-inline">Family</span> </a> </li>
                                <li class="nav-item"> <a href="#profile-tab-4" data-bs-toggle="tab"
                                        data-toggle="tab" class="nav-link"> <span class="number">4</span> <span
                                            class="d-none d-sm-inline">Photo</span> </a> </li>
                                <li class="nav-item"> <a href="#profile-tab-5" data-bs-toggle="tab"
                                        data-toggle="tab" class="nav-link"> <span class="number">5</span> <span
                                            class="d-none d-sm-inline">Preferences</span> </a> </li>
                            </ul>
                            <div class="tab-content b-0 pt-0 mb-0">
                                <div id="bar" class="progress mb-3" style="height: 7px;">
                                    <div class="bar progress-bar progress-bar-striped progress-bar-animated bg-success"
                                        style="width: 14.2857%;"></div>
                                </div> <!-- end tab pane --> {{-- Personal --}} <div class="tab-pane active"
                                    id="profile-tab-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1">Managed By</label>
                                                <div class="col-md-3">
                                                    <select name="profile_creating_for"
                                                        class="form-select" id="profile_creating_for" required>

                                                    </select>
                                                </div> <label class="col-md-3 col-form-label"
                                                    for="name1"> Gender</label>
                                                <div class="col-md-3"> <select name="lead_gender" class="form-select"
                                                        id="lead_gender" required>
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> Full name</label>
                                                <div class="col-md-3"> <input type="text" id="full_name"
                                                        name="full_name" class="form-control" placeholder="Full Name"
                                                        required> </div> <label class="col-md-3 col-form-label"
                                                    for="name1"> Food
                                                    Choice</label>
                                                <div class="col-md-3"> <select name="food_choice" id="food_choice"
                                                        class="form-select" required>
                                                        <option value="">Select Food Choice</option>
                                                        <option value="2" selected>Non-Vegetarian</option>
                                                        <option value="1">Vegetarian</option>
                                                        <option value="3">Eggetarian</option>
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="surname1">Religion</label>
                                                <div class="col-md-3"> <select name="religion" class="form-select"
                                                        id="religion" required> </select>
                                                </div> <label class="col-md-3 col-form-label"
                                                    for="surname1">Castes</label>
                                                <div class="col-md-3"> <select name="castes" class="form-select"
                                                        id="castes"> </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="email1">Birth Date</label>
                                                <div class="col-md-3"> @php $max_date = date('Y-m-d', strtotime('-18 years')); @endphp <input type="date"
                                                        id="birth_date" name="birth_date" class="form-control"
                                                        max="{{ $max_date }}" value="{{ $max_date }}"
                                                        required> </div> <label class="col-md-3 col-form-label"
                                                    for="email1">Birth Time</label>
                                                <div class="col-md-3"> <input type="time" id="birth_time"
                                                        name="birth_time" class="form-control"
                                                        value="{{ date('H:i:s') }}" required> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="email1">Height</label>
                                                <div class="col-md-3"> <select name="user_height" id="user_height"
                                                        class="form-select" required>
                                                        <option value="">Select Height</option>
                                                    </select> </div> <label class="col-md-3 col-form-label"
                                                    for="email1">Weight</label>
                                                <div class="col-md-3"> <input type="number" id="weight"
                                                        name="weight" class="form-control" value="60" required>
                                                </div>
                                            </div>
                                            <div class="row md-3"> <label class="col-md-3 col-form-label"
                                                    for="surname1">Marital Status</label>
                                                <div class="col-md-3"> <select name="marital_status"
                                                        class="form-select" id="marital_status" required>
                                                        <option value="Never Married">Never Married</option>
                                                        <option value="Awaiting Divorce">Awaiting Divorce</option>
                                                        <option value="Divorcee">Divorcee</option>
                                                        <option value="Widnowed">Widnowed</option>
                                                        <option value="Anulled">Anulled</option>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label" for="no_of_child">No Of Child</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="no_of_child" id="no_of_child" class="form-control">
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
                                            <div class="row md-3 mt-3">
                                                <label class="col-md-3 col-form-label"
                                                    for="surname1">Manglik Status</label>
                                                <div class="col-md-3"> <select name="manglik_status"
                                                        class="form-select" id="manglik_status" required>
                                                    </select>
                                                </div>
                                                <label class="col-md-3 col-form-label">Locality</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="locality" id="locality" class="form-control">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled"> </li>
                                        <li class="next list-inline-item float-end">
                                        <li class="next list-inline-item float-end"> <button type="button"
                                                class="btn btn-success">Go To Professional Details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button> </li>
                                        </li>
                                    </ul>
                                </div> {{-- Professional --}} <div class="tab-pane" id="profile-tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> Education</label>
                                                <div class="col-md-3"> <select name="education_list"
                                                        class="form-select" id="education_list" required>
                                                    </select> </div> <label class="col-md-3 col-form-label"
                                                    for="name1"> Occupation</label>
                                                <div class="col-md-3"> <select name="occupation_list"
                                                        class="form-select" id="occupation_list" required>
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1">Wish To Go Abroad</label>
                                                <div class="col-md-3"> <select name="wish_to_go_abroad"
                                                        class="form-select" id="wish_to_go_abroad">
                                                        <option selected value="0">No</option>
                                                        <option value="1">Yes</option>
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1">Working City</label>
                                                <div class="col-md-3 row">
                                                    <div class="col-md-12"> <input type="text"
                                                            name="search_working_city" autocomplete="off"
                                                            class="form-control" id="search_working_city"> <input
                                                            type="text" name="current_city" readonly
                                                            class="form-control d-none" id="working_city"> </div>
                                                    <div class="col-md-12 cityListOptions"> </div>
                                                </div> <label class="col-md-3 col-form-label" for="surname1">Yearly
                                                    Income</label>
                                                <div class="col-md-3"> <select name="yearly_income"
                                                        class="form-select" id="yearly_income" required>
                                                        @foreach ($income_ranges as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="surname1">About</label>
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
                                        <li class="previous list-inline-item disabled"> <button type="button"
                                                class="btn btn-light"><i class="mdi mdi-arrow-left me-1"></i> Back
                                                to Personal</button> </li>
                                        <li class="next list-inline-item float-end">
                                        <li class="next list-inline-item float-end"> <button type="button"
                                                class="btn btn-success">Go To Family Details <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button> </li>
                                    </ul>
                                </div> {{-- Family --}} <div class="tab-pane" id="profile-tab-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> Gotra</label>
                                                <div class="col-md-3"> <input type="text" id="family_gotra"
                                                        name="family_gotra" class="form-control" placeholder="Gotra">
                                                </div> <label class="col-md-3 col-form-label" for="surname1">Family
                                                    Income</label>
                                                <div class="col-md-3"> <select name="family_income"
                                                        class="form-select" id="family_income" required>
                                                        @foreach ($income_ranges as $annual_income)
                                                            <option value="{{ $annual_income[0] }}">
                                                                {{ $annual_income[1] }}</option>
                                                        @endforeach
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1">Father Occupation</label>
                                                <div class="col-md-3"> <select name="father_status"
                                                        id="father_status" class="form-select" required>
                                                        <option value="">Select Father Status</option>
                                                    </select> </div> <label class="col-md-3 col-form-label"
                                                    for="name1">Mother Occupation</label>
                                                <div class="col-md-3"> <select name="mother_status"
                                                        id="mother_status" class="form-select" required>
                                                        <option value="">Select Father Status</option>
                                                    </select> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> Brothers</label>
                                                <div class="col-md-3"> <input type="number" min="0"
                                                        value="0" class="form-control" name="brothers"
                                                        id="brothers" required> </div> <label
                                                    class="col-md-3 col-form-label" for="name1">
                                                    Sisters</label>
                                                <div class="col-md-3"> <input type="number" min="0"
                                                        value="0" class="form-control" name="sisters"
                                                        id="sisters" required> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> Married Brothers</label>
                                                <div class="col-md-3"> <input type="number" value="0"
                                                        class="form-control" name="married_brothers"
                                                        id="married_brothers"> </div> <label
                                                    class="col-md-3 col-form-label" for="name1">Married
                                                    Sisters</label>
                                                <div class="col-md-3"> <input type="number" value="0"
                                                        class="form-control" name="married_sisters"
                                                        id="married_sisters"> </div>
                                            </div>
                                            <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                    for="name1"> House Type</label>
                                                <div class="col-md-3"> <select name="house_type" id="house_type"
                                                        class="form-select" required>
                                                        <option value="">Select House Type</option>
                                                        <option value="1" selected>Owned</option>
                                                        <option value="2">Rented</option>
                                                        <option value="3">Leased</option>
                                                    </select> </div> <label class="col-md-3 col-form-label"
                                                    for="name1">Family Type</label>
                                                <div class="col-md-3"> <select name="family_type" id="family_type"
                                                        class="form-select" required>
                                                        <option value="">Select Family Type</option>
                                                        <option value="1" selected>Nuclear</option>
                                                        <option value="2">Joint</option>
                                                    </select> </div>
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
                                        <li class="previous list-inline-item disabled form_output"> <button
                                                type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to
                                                Profession</button> </li>
                                        <li class="next list-inline-item float-end btn_div"> <button type="button"
                                                class="btn btn-success">Go To Photos <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button> </li>
                                    </ul>
                                </div> {{-- Photo --}}
                                <div class="tab-pane" id="profile-tab-4">
                                    <div class="row">
                                        <div class="col-12 photo_viewer row"> </div> <!-- end col -->
                                    </div> <!-- end row -->
                                    <div class="row mb-3">
                                        <label class="col-md-3 col-form-label">Photo Score</label>
                                        <div class="col-md-3">
                                            <select name="photo_score" id="photo_score"
                                                class="form-select" required>
                                                <option value="">Select Photo Score</option>
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    {{-- <input type="file" name="photo" accept="image/*" class="js-photo-upload" userId="210708"> --}}
                                    <ul class="pager wizard mb-0 list-inline mt-2">
                                        <li class="previous list-inline-item disabled form_output"> <button
                                                type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Family</button>
                                        </li>
                                        <li class="next list-inline-item float-end btn_div"> <button type="button"
                                                class="btn btn-success">Go To Preferences <i
                                                    class="mdi mdi-arrow-right ms-1"></i></button> </li>
                                    </ul>
                                </div> {{-- preference --}} <div class="tab-pane" id="profile-tab-5">
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
                                        <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                for="name1"> Min Age</label>
                                            <div class="col-md-3"> <input type="number" name="min_age"
                                                    id="min_age" class="form-control"> </div> <label
                                                class="col-md-3 col-form-label" for="name1"> Max Age</label>
                                            <div class="col-md-3"> <input type="number" name="max_age"
                                                    id="max_age" class="form-control"> </div>
                                        </div>
                                        <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                for="name1"> Min Height</label>
                                            <div class="col-md-3"> <input type="number" name="min_height"
                                                    id="min_height" class="form-control"> </div> <label
                                                class="col-md-3 col-form-label" for="name1"> Max
                                                Height</label>
                                            <div class="col-md-3"> <input type="number" name="max_height"
                                                    id="max_height" class="form-control"> </div>
                                        </div>
                                        {{-- <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                for="name1"> Min Income</label>
                                            <div class="col-md-3"> <select name="min_income" id="min_income"
                                                    class="form-select">
                                                    @foreach ($income_ranges as $annual_income)
                                                        <option value="{{ $annual_income[0] }}">
                                                            {{ $annual_income[1] }}</option>
                                                    @endforeach
                                                </select> </div> <label class="col-md-3 col-form-label"
                                                for="name1"> Max Income</label>
                                            <div class="col-md-3"> <select name="max_income" id="max_income"
                                                    class="form-select">
                                                    @foreach ($income_ranges as $annual_income)
                                                        <option value="{{ $annual_income[0] }}">
                                                            {{ $annual_income[1] }}</option>
                                                    @endforeach
                                                </select> </div>
                                        </div> --}}
                                        <div class="row mb-3">
                                            <label class="col-md-3 col-form-label">Min Income</label>
                                            <div class="col-md-3">
                                                <input type="text" name="min_income" id="min_income" class="form-control">
                                            </div>
                                            <label class="col-md-3 col-form-label">Max Income</label>
                                            <div class="col-md-3">
                                                <input type="text" name="max_income" id="max_income" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                for="name1"> Manglik</label>
                                            <div class="col-md-3"> <select name="manglik_pref" id="manglik_pref"
                                                    class="form-select"></select> </div>
                                            <label class="col-md-3 col-form-label" for="name1"> Food
                                                Choice</label>
                                            <div class="col-md-3"> <select name="foodchoice_pref"
                                                    id="foodchoice_pref" class="form-select">
                                                    <option value="0">Doesn't Matter</option>
                                                    <option value="1">Non Vegetarial</option>
                                                    <option value="2">Vegetarial</option>
                                                </select> </div>
                                        </div>
                                        <div class="row mb-3"> <label class="col-md-3 col-form-label"
                                                for="name1"> Marital Status</label>
                                            <div class="col-md-3"> <select name="marital_status_perf"
                                                    id="marital_status_perf" class="form-select"> </select>
                                            </div> <label class="col-md-3 col-form-label" for="name1">
                                                Occupation</label>
                                            <div class="col-md-3"> <select name="occupation_status_perf"
                                                    id="occupation_status_perf" class="form-select"> </select>
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
                                        <li class="previous list-inline-item disabled form_output"> <button
                                                type="button" class="btn btn-light"><i
                                                    class="mdi mdi-arrow-left me-1"></i> Back to Photos</button>
                                        </li>
                                        <li class="next list-inline-item float-end btn_div"> <button type="submit"
                                                name="submit" class="btn btn-success">Update</button> </li>
                                    </ul>
                                </div>
                            </div> <!-- tab-content -->
                        </div> <!-- end #progressbarwizard-->
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Update User Details Modal Ends --}}

    {{-- Add Credit Starts --}}
    <div class="modal fade" id="addCreditModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Credit</h5> <button type="button" class="btn-close"
                        data-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addusercredit') }}" method="post" id="addCreditForm">
                        @csrf
                        <div class="form-group row mb-3"> {{-- <label for="" class="col-md-3">Enter Mobile</label> --}} <div class="col-md-9">
                                {{-- <input type="number" class="form-control" name="user_mobile" id="user_mobile"> --}} <input type="number" class="form-control d-none"
                                    name="user_id" id="user_id_fetched"> </div>
                        </div>
                        <div class="form-group row mb-3"> <label for="" class="col-md-3">Total
                                Credits</label>
                            <div class="col-md-9"> <input type="number" value="5" class="form-control"
                                    readonly> </div>
                        </div>
                        <div class="form-group row mb-3 formOutputDiv"> </div>
                        <div class="form-group float-end submitDiv" style="display: none"> <button
                                class="btn btn-sm btn-danger submit_btn_credit" type="submit"
                                name="submit">Save</button> </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Add Credit Ends --}}

    {{-- add photos modal starts --}}
    <div class="modal fade" id="cropperModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-purple">
                    <h5 class="modal-title  text-white">Upload User Photo</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
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
                                <img style="width: 271px; height: 271px;" class="js-avatar-preview"
                                    src="">
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
@endif
<div class="rightbar-overlay"></div>
@include('layouts.scripts-footer')
<script>
    $(document).ready(function() {
        $('.loader').hide();
    });
    $(document).on('click', '.tmeheSwitcher', function() {
        localStorage.setItem("theme", $(this).val());
    });
    $('.button-menu-mobile').trigger('click');
    $(document).on('click', '.btn-close', function(e) {
        e.preventDefault();
        $('.modal').modal('hide');
    });
    $(document).on('click', '.generatePaymentLink', function(e) {
        e.preventDefault();
        $('#paymentLinkModal').modal('show');
    });


    getCrmPlans();

    function getCrmPlans() {
        plan_optins = `<option value="">Select Plan</option>`;
        $.ajax({
            url: "{{ route('crmleadplans') }}",
            type: "get",
            success: function(plan_resp) {
                for (let i = 0; i < plan_resp.length; i++) {
                    const plan_amounts = plan_resp[i];
                    var plan_name = plan_amounts.type.split("_");
                    plan_optins += `<option value="${plan_name[0]}">${plan_name[0]}</option>`;
                }
                $('#user_plan').html(plan_optins);
            }
        });
    }

    $(document).on('submit', '#generatePaymentLinkForm', function(e) {
        e.preventDefault();
        $('.btnDiv').html('Please Wait ..........');
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(data) {
                $('.formOutputMessage').html(`<span class="text-danger">${data.link}</span>`);
                $('#generatePaymentLinkForm')[0].reset();
                $('.btnDiv').html(' <button class="btn btn-sm btn-success">Generate</button>');
            }
        })
    });

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
                $('.casteSelector').html(caste_html);
            }
        });
    }
    $(document).ready(function() {
        $('.loader').hide();
        $(document).on('click', '.logoutButtonNav', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('markcheckout') }}",
                type: "get",
                success: function(checkoutResp) {
                    if (checkoutResp.type == true) {
                        $('.logoutSubmitButton').trigger('click');
                    }
                }
            });
        });
    });

    if ("{{ Auth::user()->role }}" == "{{ config('constants.roles_ineger')['relationship_mananger'] }}" ||
        "{{ Auth::user()->role }}" == "{{ config('constants.roles_ineger')['approvals'] }}" ||
        "{{ Auth::user()->role }}" == "{{ config('constants.roles_ineger')['customer_support'] }}" ||
        "{{ Auth::user()->role }}" == "{{ config('constants.roles_ineger')['telesales'] }}") {
        /* saerch lead*/
        $(document).on('click', '.search_lead', function(e) {
            e.preventDefault();
            $('.search_details').html('');
            $('#search_mobile_number').val('');
            $('#search_lead_modal').modal('show');
        });
        $(document).on('click', '.search_lead_mobile', function(e) {
            e.preventDefault();
            var lead_mobile = $('#search_mobile_number').val();
            var serch_type = $('#select_search_type').val();
            var leads_html = '';
            $('.search_btn_div').html('<div class="spinner-border text-danger m-2" role="status"></div>');
            if (lead_mobile == '') {
                $('.search_details').html(
                    '<div class="mt-3 alert alert-danger" role="alert"><strong>Warning</strong> Please Fill Mobile Number Carefully</div>'
                );
            } else {
                $.ajax({
                    url: "{{ route('overallsearch') }}",
                    type: "get",
                    data: {
                        "search_data": lead_mobile,
                        "search_type": serch_type
                    },
                    success: function(search_resp) {
                        $('.search_btn_div').html(
                            ' <button class="btn btn-purple btn-rounded btn-sm waves-effect waves-light search_lead_mobile"><i class="fas fa-search"></i></button>'
                        );
                        let profileStatus = "";
                        if (search_resp.type == true) {
                            for (let i = 0; i < search_resp.data.length; i++) {
                                const lead_deatsils = search_resp.data[i];
                                if (lead_deatsils.is_approved == 1) {
                                    profileStatus = "Approved";
                                } else {
                                    profileStatus = "Un-Approved";
                                }
                                leads_html +=
                                    `<table class="table table-striped table-inverse"> <tr> <th colspan="4">${profileStatus} Profile Based On Your Search   <a class="btn btn-xs btn-pink" target="_blank" href="{{ route('pdfprofiles') }}?user_ids=${lead_deatsils.id}"  data-toggle="tooltip" data-placement="top" title="Download Pdf"><i class="fas fa-file-pdf"></i></a></th> </tr> <tr><th colspan="4">`;
                                if (lead_deatsils.user_photos != null) {
                                    for (let j = 0; j < lead_deatsils.user_photos.length; j++) {
                                        const uPhoto = lead_deatsils.user_photos[j];
                                        if (uPhoto.profile_pic == 1) {
                                            leads_html +=
                                                `<img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${uPhoto.photo_url}" width="100px">`;
                                        }
                                    }
                                }
                                leads_html +=
                                    `</th></tr> <tr> <th>Name</th> <td>${lead_deatsils.name}</td> <th>Mobile</th> <td>${lead_deatsils.user_mobile}</td> </tr> <tr> <th>Assigned To</th> <td>`;
                                leads_html += lead_deatsils.temple_name;
                                leads_html += `</td> </tr>`;
                                leads_html += `<tr> <th colspan="4">`;
                                leads_html +=
                                    `<button type="button" class="btn btn-sm btn-success float-end viewDetails" leadId="${lead_deatsils.id}">View Full Details</button>`;
                                leads_html +=
                                    `
                                    <button class="btn btn-danger btn-xs mark_married" user_id="${lead_deatsils.id}">Mark Married</button>
                                    <button class="btn btn-purple btn-xs mark_premium" user_id="${lead_deatsils.id}">Mark Premium</button>
                                    <button class="btn btn-primary btn-xs addCreditButton" user_id="${lead_deatsils.id}">Add Credits</button>
                                    <input type="file" name="photo" accept="image/*" class="js-photo-upload" userId="${lead_deatsils.id}">
                                    </button>
                                    </th>
                                    </tr>`;
                                leads_html += `</table>`;
                            }
                            $('.search_details').html(leads_html);
                        } else {
                            $('.search_details').html(
                                '<div class="form-group"><div class="alert alert-danger" role="alert"><strong>No Record Found For This Mobile</strong></div></div>'
                            );
                        }
                    }
                });
            }
        });
        $(document).on('click', '.viewDetails', function(e) {
            e.preventDefault();
            console.log("adsdasa da");
            getUserDetails($(this).attr('leadid'));
        });

        function getUserDetails(userId) {
            $('.loader').show();
            $('#search_lead_modal').modal('hide');
            $('.profile_btn_div').html('<div class="spinner-border text-danger m-2" role="status"></div>');
            $.ajax({
                url: "{{ route('getuserdatabyid') }}",
                type: "get",
                data: {
                    "user_id": userId
                },
                success: function(userResponse) {
                    $('.loader').hide();
                    let aproveButton = "";
                    console.log(userResponse.id);
                    aproveButton =
                        `<button class="btn btn-success btn-sm edit_n_approve_user float-end" user_id=${userResponse.id}>Edit Details</button>`;
                    $('.approve_button').html(aproveButton);
                    let userHeight;
                    let userFt = parseInt(parseInt(userResponse.height_int) / 12);
                    let userInch = parseInt(userResponse.height_int) % 12;
                    userHeight = userFt + "Ft " + userInch + "In";
                    let userIncome = userResponse.monthly_income;
                    $('#max_height').val(userResponse.userpreference.height_max);
                    $('#min_height').val(userResponse.userpreference.height_min);
                    $('#max_age').val(userResponse.userpreference.age_max);
                    $('#min_age').val(userResponse.userpreference.age_min);
                    $('#maritalStatus').val(userResponse.userpreference.marital_statusPref);
                    $('#manglik_status').val(userResponse.userpreference.manglikPref);
                    $('#foor_choice').val(userResponse.userpreference.food_choicePref);
                    $('#min_income').val(userResponse.userpreference.income_min);
                    $('#max_income').val(userResponse.userpreference.income_max);
                    $('#user_denger').val(userResponse.userpreference.genderCode_user);
                    $('#profileSendDay').val(userResponse.profile_sent_day);
                    $('.imageDisplayArea').html(mainImageHtml);
                    $('.userCaste').text(userResponse.religion + ' : ' + userResponse.caste);
                    $('.userName').text(userResponse.name);
                    $('.monthlyIncomeUser').text(userIncome + ' LPA');
                    $('.qualificationUser').text(userResponse.education);
                    $('.occupationUser').text('Occupation :' + userResponse.occupation);
                    $('.aboutUser').text(userResponse.about);
                    $('.userCity').text("Working City : " + userResponse.working_city);
                    $('.userHeight').text(userHeight);
                    $('.userWeight').text(userResponse.weight + "KG");
                    $('.genderUser').text(userResponse.gender);
                    $('.userMobile').text(userResponse.user_mobile);
                    $('.birthDateUser').text(userResponse.birth_date);
                    $('.foodChoiceUser').text(userResponse.food_choice);
                    $('.manglikUser').text(userResponse.manglik);
                    $('.maritalStatusUser').text(userResponse.marital_status);
                    $('.workingCity').text(userResponse.birth_place);
                    $('.cityFamily').text(userResponse.city_family); /**family details*/
                    $('.userUnmarriedBrothers').text(userResponse.unmarried_brothers);
                    $('.userUnmarriedSisters').text(userResponse.unmarried_sisters);
                    $('.userMarriedBrothers').text(userResponse.married_brothers);
                    $('.userMarriedSisters').text(userResponse.married_sisters);
                    $('.userFamilyType').text(userResponse.family_type);
                    $('.userHouseType').text(userResponse.house_type);
                    $('.fatherStatusUser').text(userResponse.father_status);
                    $('.motherStatusUser').text(userResponse.mother_status);
                    if (userResponse.photo != null) {
                        var mainImageHtml = '';
                        mainImageHtml +=
                            `<img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${userResponse.photo}" class="w-75">`;
                        $('.mainImage').html(mainImageHtml);
                    }
                    let setUserPreferences = userResponse.userpreference;
                    $('.minheight_txt').text(setUserPreferences.height_min);
                    $('.maxheight_txt').text(setUserPreferences.height_max);
                    $('.min_income_pref').text(setUserPreferences.income_min);
                    $('.max_income_pref').text(setUserPreferences.income_max);
                    $('.caste_prefs').text(setUserPreferences.caste);
                    $('.citizenship_pref').text(setUserPreferences.citizenship);
                    $('.marital_status_pref').text(setUserPreferences.marital_status);
                    $('.manglik_pref').text(setUserPreferences.manglik);
                    $('.city_pref').text(setUserPreferences.pref_city);
                    $('.state_pref').text(setUserPreferences.pref_state);
                    $('.coutnry_pref').text(setUserPreferences.pref_country);
                    $('.min_age_pref').text(setUserPreferences.age_min);
                    $('.max_age_pref').text(setUserPreferences.age_max);
                    $('#userDetailsModal').modal('show');
                }
            });
        }
        $(document).on('click', '.edit_n_approve_user', function(e) {
            e.preventDefault();
            $('.loader').show();
            $('#userDetailsModal').modal('hide');
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

                    $("#is_disable").val(userResponse.is_disable);
                    $("#no_of_child").val(userResponse.no_of_child);
                    $("#birth_place").val(userResponse.birth_place);
                    $("#citizenship").val(userResponse.citizenship);
                    $("#disability").val(userResponse.disability);
                    $("#no_of_child").val(userResponse.no_of_child);
                    $("#designation").val(userResponse.designation);
                    $("#additional_degree").val(userResponse.degree);
                    $("#college_name").val(userResponse.college);
                    $("#family_current_city").val(userResponse.city_family);
                    $("#family_about").val(userResponse.about_family);
                    $("#photo_score").val(userResponse.photo_score);
                    $("#whatsapp_no").val(userResponse.whatsapp);
                    $("#company_name").val(userResponse.company);
                    $("#native_city").val(userResponse.native);
                    $("#contact_address").val(userResponse.contact_address);
                    $("#alternate_number1").val(userResponse.mobile_family);
                    $("#alternate_number2").val(userResponse.whatsapp_family);
                    $("#email").val(userResponse.email_family);
                    $("#about_me").val(userResponse.about);
                    $("#food_choice").val(userResponse.food_choiceCode);
                    $('#locality').val(userResponse.locality);
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
                    if (userResponse.annual_income != null) {
                        $("#yearly_income").val(userResponse.annual_income);
                    } /*family details*/
                    if (userResponse.gotra != null) {
                        $("#family_gotra").val(userResponse.gotra);
                    }
                    if (userResponse.monthly_income != null) {
                        $("#family_income").val(userResponse.monthly_income);
                    }
                    if (userResponse.father_statusCode != null) {
                        $("#father_status").val(userResponse.father_statusCode);
                    }
                    if (userResponse.mother_statusCode != null) {
                        $("#mother_status").val(userResponse.mother_statusCode);
                    }
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
                        if (imageElement.photo_status == "active" || imageElement.photo_status ==
                            "pending") {
                            photoHtml +=
                                `<div class="mb-3 col-md-3 p-1 text-center imageDiv${userResponse.id}${f}"> <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${imageElement.photo_url}" class="w-100 rounded"> <button class="btn btn-sm btn-warning btnDelPic" userId="${userResponse.id}" indexPic="${imageElement.id}">Delete</button> </div>`;
                        }
                    }
                    $('.photo_viewer').html(photoHtml);
                    $('.rejectButton').attr("userId", $(this).attr('user_id'));

                    var caste_html = '<option value="">Select Caste</option>';
                    $.ajax({
                        url: "{{ route('getallcastes') }}",
                        type: "get",
                        success: function(caste_Response) {
                            for (let k = 0; k < caste_Response.length; k++) {
                                const caste_list = caste_Response[k];
                                if (userResponse.userpreference.castePref.includes(caste_list.id)) {
                                    caste_html +=
                                    `<option selected value="${caste_list.id}">${caste_list.caste ?? caste_list.value}</option>`;
                                } else {
                                    caste_html +=
                                    `<option value="${caste_list.id}">${caste_list.caste ?? caste_list.value}</option>`;
                                }
                            }
                            $('.casteSelector').html(caste_html);
                        }
                    });

                    $('#min_age').val(userResponse.userpreference.age_min ?? 21);
                    $('#max_age').val(userResponse.userpreference.age_max ?? 35);
                    $('#min_height').val(userResponse.userpreference.height_min_s ?? 60);
                    $('#max_height').val(userResponse.userpreference.height_max_s ?? 72);
                    $('#min_income').val(userResponse.userpreference.income_min);
                    $('#max_income').val(userResponse.userpreference.income_max ?? 1.25);
                    $('#marital_status_perf').val(userResponse.userpreference.marital_statusPref ??
                        2);
                    $('#foodchoice_pref').val(userResponse.userpreference.food_choicePref ?? 0);
                    $('#manglik_pref').val(userResponse.userpreference.manglikPref);
                    $('#occupation_status_perf').val(userResponse.userpreference.workingPref ?? 1);
                    $('#religion_preference').val(userResponse.userpreference.religionPref ?? 3);
                }
            });
        });

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
        $(document).on('click', '.mark_married', function(e) {
            e.preventDefault();
            if (confirm("Are you sure?")) {
                $.ajax({
                    url: "{{ route('markprofilemarried') }}",
                    type: "get",
                    data: {
                        "user_id": $(this).attr('user_id')
                    },
                    success: function(data) {
                        if (data.type == true) {
                            alert("Record Updated");
                            databaseTable.ajax.relod();
                        }
                    }
                });
            }
        });
        $(document).on('click', '.addCreditButton', function(e) {
            e.preventDefault();
            $('#user_id_fetched').val($(this).attr('user_id'));
            $('#addCreditModal').modal('show');
            window.setTimeout(function() {
                $('.submit_btn_credit').trigger('click');
            }, 1500);
        });
        $(document).on('submit', '#addCreditForm', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                success: function(creditResp) {
                    if (creditResp.type == true) {
                        $('.formOutputDiv').html(
                            `<div class="alert alert-success" role="alert"><strong>Success </strong>${creditResp.message}</div>`
                        );
                        $('#addCreditForm')[0].reset();
                        window.setTimeout(function() {
                            $('.formMessage').html('');
                            $('#addCreditModal').modal('hide');
                        }, 2000);
                    }
                }
            })
        });
        $(document).on('click', '.mark_premium', function(e) {
            e.preventDefault();
            if (confirm("Are you sure?")) {
                $.ajax({
                    url: "{{ route('markprofilepremium') }}",
                    type: "get",
                    data: {
                        "user_id": $(this).attr('user_id')
                    },
                    success: function(data) {
                        if (data.type == true) {
                            alert("Record Updated");
                            databaseTable.ajax.relod();
                        }
                    }
                });
            }
        });
        $(document).on('change', '#select_search_type', function(e) {
            if ($(this).val() == 1) {
                $("#search_mobile_number").get(0).type = 'number';
                $("#search_mobile_number").attr("placeholder", "Mobile Number");
            } else {
                $("#search_mobile_number").get(0).type = 'text';
                $("#search_mobile_number").attr("placeholder", "Type name here");
            }
        });

        $(document).on('keyup', '#search_working_city', function() {
            console.log($(this).val().length);
            if ($(this).val().length >= 3) {
                var cities_lsit = getCitiesName($(this).val());
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

        $(document).on('change', '#profile_creating_for', function() {
            if ($(this).val() == "4,Sister" || $(this).val() == "2,Mother" || $(this).val() == "7,Daughter") {
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
        $(document).on('click', '.city_name', function() {
            var id = $(this).attr('id');
            var city_name = $(this).attr('cityname');
            $('.cityListOptions').html('');
            $('#working_city').val(id);
            $('#search_working_city').val(city_name);
        });
    }

    // cropper js started

    let cropper;
    let cropperModalId = '#cropperModal';
    let $jsPhotoUploadInput = $('.js-photo-upload');

    $(document).on('change', '.js-photo-upload', function() {
        var files = this.files;
        $('#search_lead_modal').modal('hide');
        $('#user_id_photo').val($(this).attr('user_id'));
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
</script>

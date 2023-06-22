@section('page-title', 'Incomplete Leads Pending')
@extends('layouts.main-landingpage')
@section('page-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/2.0.0-alpha.2/cropper.min.css"
        integrity="sha512-6QxSiaKfNSQmmqwqpTNyhHErr+Bbm8u8HHSiinMEz0uimy9nu7lc/2NaXJiUJj2y4BApd5vgDjSHyLzC8nP6Ng=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Incomplete Leads Pending</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pending Profiles</a></li>
                            <li class="breadcrumb-item active">Incomplete Leads Pending</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="col-md-12">
                            <table class="table table-striped table-inverse" id="incomplete_leads_pending_table">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Id</th>
                                        <th>Phone</th>
                                        <th>Channel</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody class="load_incomplete_leads_pending_data">
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
    </div>

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
    <script>
        $(document).ready(function() {
            // load profiles for approval
            var table_data = $('#incomplete_leads_pending_table').DataTable({
                "order": [
                    [4, "asc"]
                ],
                "processing": true,
                "ajax": {
                    "url": "{{ route('incompleteleadspendinglist') }}",
                    "type": "get",
                },
                "columns": [{
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'user_phone',
                        name: 'user_phone',
                    },
                    {
                        data: 'channel',
                        name: 'channel',
                    },
                    {
                        data: 'status',
                        name: 'status',
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                    }
                ]
            });
        });
    </script>
@endsection

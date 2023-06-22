@section('page-title', 'Profile Not Sent Today')
@extends('layouts.main-landingpage')
@section('page-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title profileDetails">Profile To Be Send Today</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pending Profiles</a></li>
                            <li class="breadcrumb-item active">Find Match</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body sentProfileList">
                        <table class="table table-striped table-inverse" id="userlisttable">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Plan Purchase Date</th>
                                    <th>Validity</th>
                                    <th>Find Match</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
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
    <script>
        "use strict";
        $(document).ready(function() {
            var databaseTable = $('#userlisttable').DataTable({
                "order": [
                    [3, "desc"]
                ],
                "processing": true,
                "ajax": "{{ route('todaysentlist') }}",
                "columns": [{
                        data: 'name',
                    },
                    {
                        data: 'user_mobile',
                    },
                    {
                        data: 'amount_collected_date',
                    },
                    {
                        data: 'validity',
                    },
                    {
                        data: null,
                        render: function(data) {
                            var urlSend = '{{ route('findmatch') }}';
                            urlSend = urlSend.replace(':appointment', $('#followup_id').val());
                            return `<a href="${urlSend}?user_id=${data.id}&user_birth=${data.birth_date}" target="_blank">Find Match</a>`;
                        }
                    }
                ]
            });
        });
    </script>
@endsection

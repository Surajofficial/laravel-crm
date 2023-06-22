<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile PDf Creation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style rel="stylesheet" href="{{ url('libs/pdfmake/build/pdfmake.min.js') }}"></style>
</head>

<body>
    <div class="container pdfDiv">
        <div class="row shadow" style="height: 99vh;  page-break-after: always;">
            <div class="col-md-12 text-center">
                <img src="{{ url('images/hansdark_banner.png') }}" class="main-banner-img mt-3 w-75" alt="">
                <h4>Twango Social Network Pvt. Ltd.</h4>
                <hr>
                <div class="row mt-5 shadow-sm text-center">
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5> Website: www.hansmatrimony.com</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Mail us at : help@hansmatrimony.com</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Add : H-18 Bali Nagar, New Delhi</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Contact : +91-9697989697, 9560818993</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-2">
                <img src="{{ url('images/1e1ef807efe66d39bc6b9402d0f1d62b_collage_450.jpg') }}" alt="" class="img-thumbnail rounded" style="height: 650px; width: auto">
                <h5 class="mt-5">Dear Shubham Bhatia Please Find the Attached Profiles As Per Your Requirement
                </h5>
            </div>
        </div>
    </div>
    <style>
        .complete-height {
            height: 99vh;
            margin: 10px 0px 10px 0px;
            page-break-after: always;
        }

        .watermark {
            background: url("{{ url('images/hansdark.png') }}") center center no-repeat;
            opacity: 0.6;
            opacity: 0.6;
            position: absolute;
            width: 100%;
            height: 100%;
        }

        @media print {

            html,
            body {
                border: 1px solid white;
                height: 99%;
                page-break-after: avoid;
                page-break-before: avoid;
            }
        }

    </style>
    <script src="{{ url('js/vendor.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            loadProfiles();

            function loadProfiles() {
                var htmlData = '';
                $.ajax({
                    url: "{{ route('showprofilesingroup') }}",
                    type: "get",
                    data: {
                        "user_ids": "{{ $_GET['user_ids'] }}"
                    },
                    success: function(profileResponse) {
                        for (let i = 0; i < profileResponse.length; i++) {
                            const userDetails = profileResponse[i];
                            var photoData = JSON.parse(userDetails.photo_url);
                            var heightTotal = ''; var inchHeight = '';
                            var heightFeet = Math.trunc((parseInt(userDetails.height)/12));
                            var inchesTotal = parseInt(userDetails.height)%12;
                            if(inchesTotal>0){
                                inchHeight = inchesTotal+'in';
                            }else{
                                inchHeight = ' ';
                            }
                            heightTotal = heightFeet+'ft '+inchHeight;
                            htmlData += `<div class="row complete-height shadow-sm">
                                            <div class="col-md-12">
                                                <div class="wrapper">
                                                    <div class="watermark"></div>
                                                    <div class="inner-container">
                                                        <div class="col-md-12 row">`;
                            if (photoData != null) {
                                htmlData += `<div class="col-md-6 text-center">
                                        <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[0]}" class="img-thumbnail" style="width: 400px; height:auto" alt="" class="pb-2 pt-2">
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[1]}" class="img-thumbnail" style="width: 400px; height:auto" alt="" class="pb-2 pt-2">
                                    </div>`;
                            } else {
                                if(photoData){
                                    htmlData += `<div class="col-md-6text-center">
                                            <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[0]}" class="img-thumbnail" style="width: 400px; height:auto" alt="" class="pb-2 pt-2">
                                        </div>`;
                                }else{
                                    htmlData += `<div class="col-md-6text-center">
                                            <h4>Photo Not Available</h4>
                                        </div>`;
                                }
                            }
                            htmlData += `<div class="col-md-12 table-responsive mt-3">
                                                                <table class="table table-striped table-inverse">
                                                                    <tr>
                                                                        <th colspan="4" class="text-center">Personal Details</th>
                                                                    </tr>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            <th colspan="3">${userDetails.name}</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>DOB</th>
                                                                            <td>${userDetails.birth_date}</td>
                                                                            <th>Qualification</th>
                                                                            <td>${userDetails.education}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Religion</th>
                                                                            <td>${userDetails.religion}</td>
                                                                            <th>Caste</th>
                                                                            <td>${userDetails.caste}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>Height</th>
                                                                            <td>${heightTotal}</td>
                                                                            <th>Weight</th>
                                                                            <td>${userDetails.weight}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>Occupation</th>
                                                                            <td>${userDetails.occupation}</td>
                                                                            <th>Working City</th>
                                                                            <td>${userDetails.occupation}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th>Income</th>
                                                                            <td>${userDetails.monthly_income}</td>
                                                                            <th>Marital Status</th>
                                                                            <td>${userDetails.marital_status}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Citizenship</th>
                                                                            <td>${userDetails.citizenship || '--'}</td>
                                                                            <th>Profile Manged By</th>
                                                                            <td>${userDetails.relation || '--'}</td>
                                                                        </tr>

                                                                        <tr>
                                                                            <th rowspan="5" colspan="4">${userDetails.about || '--'}  </th>
                                                                        </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12  table-responsive mt-4">
                                                            <table class="table table-striped table-inverse">
                                                                <tr>
                                                                    <th colspan="8" class="text-center">Family Details</th>
                                                                </tr>
                                                                    <tr>
                                                                        <th>Family City</th><td>${userDetails.city_family || '--'}</td>
                                                                        <th>Native place</th><td>${userDetails.birth_place || '--'}</td>
                                                                        <th>Family Type</th><td>${userDetails.family_type || '--'}</td>
                                                                        <th>House Type</th><td>${userDetails.house_type || '--'}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Gotra</th><td>${userDetails.gotra || '--'}</td>
                                                                        <th>Family Income</th><td>${userDetails.family_income || '--'}</td>
                                                                        <th>Father Status</th><td>${userDetails.father_status || '--'}</td>
                                                                        <th>Mother Status</th><td>${userDetails.mother_status || '--'}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Unmarried Brothers</th><td>${userDetails.unmarried_brothers || '0'}</td>
                                                                        <th>Unmarried Sisters</th><td>${userDetails.unmarried_sisters || '0'}</td>
                                                                        <th>Married Brothers</th><td>${userDetails.married_brothers || '0'}</td>
                                                                        <th>Married Sisters</th><td>${userDetails.married_sisters || '0'}</td>
                                                                    </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
                        }
                        $('.pdfDiv').append(htmlData);
                       window.setTimeout(() => {
                            window.print();
                       }, 1000);
                    }
                });
            }
        });
    </script>
</body>

</html>

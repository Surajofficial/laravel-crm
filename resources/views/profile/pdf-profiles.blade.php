<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile PDf Creation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <style rel="stylesheet" href="{{ url('libs/pdfmake/build/pdfmake.min.js') }}"></style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css"
        integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container pdfDiv" id="pdf_data">
        <div class="row shadow" style="height: 99vh;  page-break-after: always;">
            <div class="col-md-12 text-center">
                <img src="{{ url('images/hans_logo.png') }}" class="main-banner-img mt-3 w-75" alt="">
                <h4 class="d-none">Twango Social Network Pvt. Ltd.</h4>
                <hr>
                <div class="row mt-5 shadow-sm text-center">
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5> Website: www.hansmatrimony.com</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Mail us at : info@hansmatrimony.com</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Add : H-18 Bali Nagar, New Delhi</h5>
                    </div>
                    <div class="col-md-6 mb-3 p-2 ">
                        <h5>Contact : +91 969 798 9697</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-2">
                <img src="{{ url('images/1e1ef807efe66d39bc6b9402d0f1d62b_collage_450.jpg') }}" alt=""
                    class="img-thumbnail rounded" style="height: 650px; width: auto">
                <h5 class="mt-5 d-none">Dear Shubham Bhatia Please Find the Attached Profiles As Per Your Requirement
                </h5>
            </div>
            <div class="col-md-12 border-bottom border-top" style="height: 80px;">
                <div class="row pt-3">
                    <div class="col-sm-2 text-center">
                        <a href="https://www.facebook.com/HansMatrimony" class="btn"><i class="fa fa-2x fa-facebook"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-2 text-center">
                        <a href="https://www.instagram.com/hansmatrimony/" class="btn"><i
                                class="fa fa-2x fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-2 text-center">
                        <a href="https://www.linkedin.com/company/hansmatrimony/" class="btn"><i
                                class="fa fa-2x fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-2 text-center">
                        <a href="https://www.youtube.com/channel/UCXeEAxOuoMoBCcu45PEtfmg/featured" class="btn"><i
                                class="fa fa-2x fa-youtube" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-2 text-center">
                        <a href="https://twitter.com/HansMatrimony" class="btn"><i class="fa fa-2x fa-twitter"
                                aria-hidden="true"></i></a>
                    </div>
                    <div class="col-sm-2 text-center">
                        <a href="https://g.page/HansMatrimony?share" class="btn"><i class="fa fa-2x fa-map-marker"
                                aria-hidden="true"></i></a>
                    </div>
                </div>
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
            background: url("{{ url('images/logo-sm-dark.png') }}") center center no-repeat;
            opacity: 0.1;
            opacity: 0.1;
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
                htmlData += '<div class="html21pdf_page-break"></div>';
                $.ajax({
                    url: "{{ route('showprofilesingroup') }}",
                    type: "get",
                    data: {
                        "user_ids": "{{ $_GET['user_ids'] }}"
                    },
                    success: function(profileResponse) {
                        for (let i = 0; i < profileResponse.length; i++) {
                            htmlData += '<div class="html21pdf_page-break"></div>';
                            const userDetails = profileResponse[i];
                            var photoData = JSON.parse(userDetails.photo_url);
                            var heightTotal = '';
                            var inchHeight = '';

                            if (userDetails.height) {
                                var heightFeet = Math.trunc((parseInt(userDetails.height) / 12));
                                var inchesTotal = parseInt(userDetails.height) % 12;
                                if (inchesTotal > 0) {
                                    inchHeight = inchesTotal + 'in';
                                } else {
                                    inchHeight = ' ';
                                }
                                heightTotal = heightFeet + 'ft ' + inchHeight;
                            } else {
                                heightTotal = "N.A.";
                            }

                            htmlData += `<div class="row complete-height shadow-sm">
                                            <div class="col-md-12">
                                                <div class="wrapper">
                                                    <div class="watermark"></div>
                                                    <div class="inner-container">
                                                        <div class="col-md-12 row text-center">`;
                            if (photoData != null) {
                                htmlData += `<div class="col-md-6 text-center">
                                        <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[0]}" class="img-thumbnail" style="display: block; max-width:400px; max-height:600px; width: auto; height: auto;margin-left: auto; margin-right: auto;" alt="" class="pb-2 pt-2">
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[1]}" class="img-thumbnail" style="display: block; max-width:400px; max-height:600px; width: auto; height: auto;margin-left: auto; margin-right: auto;" alt="" class="pb-2 pt-2">
                                    </div>`;
                            } else {
                                if (photoData) {
                                    htmlData += `<div class="col-md-6text-center">
                                            <img src="https://s3.ap-south-1.amazonaws.com/hansmatrimony/uploads/${photoData[0]}" class="img-thumbnail" style="display: block; max-width:400px; max-height:600px; width: auto; height: auto;margin-left: auto; margin-right: auto;" alt="" class="pb-2 pt-2">
                                        </div>`;
                                } else {
                                    htmlData += `<div class="col-md-6text-center">
                                            <h4>Photo Not Available</h4>
                                        </div>`;
                                }
                            }
                            var formattedDate = "";
                            var splitBDateMon = "";
                            var splitBDate = "";
                            if (userDetails.birth_date != null || userDetails.birth_date != undefined) {
                                splitBDate = userDetails.birth_date.split(" ");
                                splitBDateMon = splitBDate[0].split("-");
                                const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul",
                                    "Aug",
                                    "Sep", "Oct", "Nov", "Dec"
                                ];
                                formattedDate = splitBDateMon[2] + ' ' + monthNames[parseInt(
                                    splitBDateMon[1] - 1)] + ' ' + splitBDateMon[0];

                            } else {
                                formattedDate = "N.A.";
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
                                                            <th>Birth Date</th>
                                                            <td>${formattedDate}</td>
                                                            <th>Birth Time</th>
                                                            <td>${splitBDate[1]}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Birth Place</th>
                                                        <td>${userDetails.birth_place}</td>
                                                        <th>Religion</th>
                                                        <td>${userDetails.religion}</td>`;
                            htmlData += `</tr><tr> <th>Caste</th><td>`;
                            if (userDetails.caste == null || userDetails.caste == 'All') {
                                htmlData += "Others";
                            } else {
                                htmlData += userDetails.caste;
                            }
                            htmlData += `</td><th>Height</th>
                                                        <td>${heightTotal}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Weight</th>
                                                        <td>${userDetails.weight}Kg</td>
                                                        <th>Qualification</th>
                                                        <td>${userDetails.education}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Occupation</th>
                                                        <td>${userDetails.occupation}</td>
                                                        <th>Working City</th>
                                                        <td>${userDetails.working_city}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Income</th>
                                                        <td>`;
                            if (userDetails.monthly_income > 10000 && userDetails.monthly_income !=
                                null) {
                                htmlData += (parseFloat(userDetails.monthly_income) / 100000)
                                    .toFixed() + "LPA";
                            } else if (userDetails.monthly_income < 9999 && userDetails
                                .monthly_income != null) {
                                htmlData += userDetails.monthly_income + "LPA";
                            } else {
                                htmlData += "00.00LPA";
                            }
                            htmlData += `</td>
                                                    <th>Marital Status</th>
                                                    <td>${userDetails.marital_status}</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Wish To Go Abroad`;
                            if (userDetails.citizenship == null || userDetails.citizenship == 0) {
                                htmlData += ' : No';
                            } else {
                                htmlData += ' : Yes';
                            }
                            htmlData += `</th> <th>Resident Status</th> <td>`;
                            if (userDetails.working_city) {
                                var splitData = userDetails.working_city.split(",");
                                let findData = splitData.indexOf('India');
                                console.log(splitData);
                                if (splitData.length > 0 && splitData[2] != null && splitData[2]
                                    .trim() === "India") {
                                    htmlData += ' Indian';
                                } else if (splitData.length > 0 && splitData[1] != null && splitData[1]
                                    .trim() === "India") {
                                    htmlData += ' Indian';
                                } else {
                                    htmlData += ' NRI';
                                }
                            } else {
                                htmlData += ' N.A.';
                            }
                            htmlData += `</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="5" colspan="4">${userDetails.about || '--'}  </th>
                                                    </tr>`;
                            if (userDetails.disability == 'yes') {
                                htmlData += `<tr>
                                                                    <th rowspan="5" colspan="4"><strong>Disablity</strong>${userDetails.disabled_part}  </th>
                                                                </tr>`;
                            }

                            htmlData += `</table>
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
                                                        <th>Family Income</th><td>${userDetails.family_income || '--'} LPA</td>
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
                           /* var pdfData = document.getElementById('pdf_data');
                            // html2pdf(pdfData);
                            var opt = {
                                margin: 0.25,
                                filename: 'myfile.pdf',
                                image: {
                                    type: 'jpeg',
                                    quality: 0.98
                                },
                                html2canvas: {
                                    scale: 2
                                },
                                jsPDF: {
                                    unit: 'in',
                                    format: 'letter',
                                    orientation: 'portrait'
                                }
                            };
                            var worker = html2pdf().set(opt).from(pdfData).save();*/
                            window.print();
                        }, 1000);
                    }
                });
            }
        });
    </script>
</body>

</html>

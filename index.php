<?php
session_start();

include_once 'dbConnect.php';

$SkillQuery = "SELECT * FROM `skills`";
$resQuery1 = mysqli_query($link, $SkillQuery);

$CertificateQuery = "SELECT * FROM `certificates`";
$resQuery2 = mysqli_query($link, $CertificateQuery);

$EducationQuery = "SELECT * FROM `education`";
$resQuery3 = mysqli_query($link, $EducationQuery);

$ProjectQuery = "SELECT * FROM `projects`";
$resQuery4 = mysqli_query($link, $ProjectQuery);

$AboutMe = "SELECT * FROM `about_me`";
$resQuery5 = mysqli_query($link, $AboutMe);

$linksQuery = "SELECT * FROM `links`";
$resQuery6 = mysqli_query($link, $linksQuery);


$bgColor = "#131313";
$color = "#ABABAB";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>Portfolio - Mindflairr</title>
    <!-- MDB icon -->
    <link rel="shortcut icon" href="https://mindflairr.com/img/mindflairr_col_logo.png" type="image/x-icon">
    <!-- Flaticons -->
    <link rel="stylesheet"
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-bold-straight/css/uicons-bold-straight.css'>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
          href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>


    <!-- Caudex-Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caudex:ital,wght@1,700&family=Ubuntu&display=swap"
          rel="stylesheet">
    <!-- internal -Files -->
    <link rel="stylesheet" href="css/mdb.min.css"/>


    <style>
        @media only screen and (max-width: 768px) {
            body {
                background-repeat: repeat-y !important;
                height: 100% !important;
                background-size: contain !important;
            }
            .carousel-control-prev{
                margin-left:-14%;
            }
            .carousel-control-next{
                margin-right:-14%;
            }

        }

        @media only screen and (max-width: 375px) {
            .progress {
                width: 75vw;
            }
            .carousel-control-prev{
                margin-left:-18%;
                margin-right:-18%;
            }
            .carousel-control-next
        }

        .selected {
            border: 2px solid<?php echo $color ?>;
            color: white;
        }

        .error-message {
            color: #a83232;
            display: none;
        }

        #InputImage {
            display: none;
        }
    </style>

</head>

<body style="background-image:url('img/Background.png'); background-repeat: repeat; height: 100vh; width: 100vw; background-size:cover; margin: 0%; padding: 0%;">

<!-- Main-section -->
<div class="container-fluid d-flex justify-content-center align-items-center"
     style="min-height: 100vh; width: 100vw; overflow-x: hidden;">
    <div class="row">
        <div class="col-12 ">

            <!-- First Row -->
            <div class="row  m-5 d-flex justify-content-between ">

                <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center  text-center"
                     style=" background-color:<?php echo $bgColor; ?>;color: <?php echo $color; ?>;  border: 1px solid <?php echo $color; ?> ;">

                    <a href="#" data-mdb-toggle="modal" data-mdb-target="#ProjectModal">
                        <svg width="200" height="181" viewBox="0 0 200 181" fill="<?php echo $bgColor ?>"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.785 32.4896L140.789 30.9853L140.822 19.6335C140.822 19.6333 140.822 19.633 140.822 19.6327C140.833 14.7904 138.96 10.2416 135.543 6.81308C132.122 3.38422 127.58 1.5 122.734 1.5H77.3193C67.3801 1.5 59.2655 9.5869 59.2311 19.5352C59.2311 19.5356 59.2311 19.536 59.2311 19.5363M140.785 32.4896L57.7311 19.5312L59.2311 19.5363M140.785 32.4896H142.289H171.5C186.425 32.4896 198.5 44.5691 198.5 59.4076V81.9219C195.753 87.9889 189.692 92.1564 182.583 92.1564H126.5V91.9067C126.5 77.3292 114.579 65.4067 100 65.4067C85.4213 65.4067 73.5 77.3292 73.5 91.9067V92.1564H17.4174C10.3075 92.1564 4.24717 87.9889 1.5 81.9219V59.4076C1.5 44.5691 13.5758 32.4896 28.4993 32.4896H57.7006H59.1966L59.2006 30.9936L59.2311 19.5363M140.785 32.4896L59.2311 19.5363M125.879 16.474L125.869 16.4638L125.859 16.4538C125.386 15.9871 124.337 15.1667 122.734 15.1667H77.3193C74.8844 15.1667 72.9042 17.1468 72.8978 19.5758C72.8978 19.576 72.8978 19.5761 72.8978 19.5763L72.8652 30.9853L72.8609 32.4896H74.3652H125.623H127.118L127.123 30.9939L127.155 19.5925V19.5882C127.155 17.9943 126.34 16.9468 125.879 16.474Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M100 135.574C113.647 135.574 124.994 125.194 126.313 111.823H182.583C188.288 111.823 193.67 110.524 198.5 108.21V152.157C198.5 166.991 186.425 179.075 171.5 179.075H28.4993C13.5759 179.075 1.5 166.991 1.5 152.157V108.21C6.33054 110.524 11.7129 111.823 17.4174 111.823H73.6871C75.0064 125.194 86.3529 135.574 100 135.574Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M106.833 91.91V109.106C106.833 112.883 103.774 115.939 99.9996 115.939C96.2255 115.939 93.1663 112.883 93.1663 109.106V91.91C93.1663 88.1328 96.2255 85.0767 99.9996 85.0767C103.774 85.0767 106.833 88.1328 106.833 91.91Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                        </svg>

                    </a>
                </div>

                <div class="col-lg-4 col-md-8 col-sm-12   m-2 p-3  d-flex justify-content-start flex-1"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?> ;position: relative">

                    <div>
                        <div class="d-flex position-relative">
                            <img class="mb-3 rounded-circle"
                                 style="height: 12vh; border: 2px solid <?php echo $color; ?>"
                                 src="img/Yellow%20Inspiration%20Modern%20Instagram%20Profile%20Picture.png"
                                 alt="Profile Image" id="ProfileImage">
                            <button type="button" class="btn btn-floating btn-sm shadow-0" id="FileInputbtn"
                                    style="margin-left: -30px; margin-top: 8.8vh; background-color:<?php echo $bgColor; ?>;
                                            color: <?php echo $color; ?>">
                                <i class="fi fi-ss-camera text-center"></i>
                            </button>
                            <input type="file" accept="image/*" id="FileInput" style="display: none;">
                            <script>
                                document.getElementById('FileInputbtn').addEventListener('click', function () {
                                    document.getElementById('FileInput').click();
                                });

                                document.getElementById('FileInput').addEventListener('change', function () {
                                    let fileInput = this;
                                    let imgElement = document.getElementById('ProfileImage');

                                    if (fileInput.files && fileInput.files[0]) {
                                        let reader = new FileReader();

                                        reader.onload = function (e) {
                                            imgElement.src = e.target.result;
                                        };

                                        reader.readAsDataURL(fileInput.files[0]);
                                    }
                                });
                            </script>
                        </div>
                        <div class="d-flex justify-content-center align-content-end">
                            <p id="username" style=" font-size: 1.5rem;color: <?php echo $color; ?>; margin: 2px; ">Your
                                Name</p>
                            <i class="fi fi-ss-pen-clip mb-0" style="font-size: small" data-mdb-toggle="modal"
                               data-mdb-target="#NameEdit"></i>
                        </div>
                        <div class="d-flex align-content-center">
                            <p id="designation" style=" font-size: 1rem;color: <?php echo $color; ?>; margin: 2px;">Your
                                Designation</p>
                            <i class="fi fi-ss-pen-clip" style="font-size: small" data-mdb-toggle="modal"
                               data-mdb-target="#DesignEdit"></i>
                        </div>
                    </div>
                    <div style="position: absolute;right: 1vw; bottom: 0px;" data-mdb-toggle="modal"
                         data-mdb-target="#PortfolioModal">
                        <i class="fi fi-sr-angle-small-right align-self-end fa-2x"></i>
                    </div>
                </div>
                <!--                editNAme-->
                <div class="modal " id="NameEdit" tabindex="-1" aria-labelledby="NameEditLabel" aria-hidden="true"
                     data-mdb-backdrop="true" data-mdb-keyboard="true">

                    <div class="modal-dialog modal-md modal-dialog-centered">

                        <div class="modal-content "
                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;">
                            <div class="modal-header border-bottom-0 d-flex justify-content-between">
                                <p class="modal-title"
                                   style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;<?php echo $color; ?>;"
                                   id="NameEditLabel">
                                    Edit Name</p>
                                <button type="button" class="btn-close shadow-0 text-danger"
                                        data-mdb-dismiss="modal">X
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" id="editName" class="form-control rounded-8"
                                       placeholder="Enter Your Name"
                                       style="background-color:<?php echo $bgColor; ?> ; color:<?php echo $color ?>; border : 1px solid <?php echo $color ?> ;"/>
                            </div>
                            <div class="modal-footer  border-top-0">
                                <button type="button" class="btn shadow-0" data-mdb-ripple-init
                                        data-mdb-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn " data-mdb-ripple-init onclick="ChangeName()"
                                        style="background-color: <?php echo $bgColor; ?> ; box-shadow: 2px 2px 2px 2px   red">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function ChangeName() {
                            const oldName = document.getElementById('username');
                            const inputname = document.getElementById('editName').value;
                            if (inputname.trim() !== '') {
                                oldName.textContent = inputname;
                            }
                        }
                    </script>
                </div>


                <!--            DesignationEdit-->
                <div class="modal " id="DesignEdit" tabindex="-1" aria-labelledby="DesignEditLabel" aria-hidden="true"
                     data-mdb-backdrop="true" data-mdb-keyboard="true">

                    <div class="modal-dialog modal-md modal-dialog-centered">

                        <div class="modal-content "
                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;">

                            <div class="modal-header border-bottom-0 d-flex justify-content-between">

                                <p class="modal-title"
                                   style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  color: <?php echo $color; ?>;"
                                   id="DesignEditLabel">
                                    Edit Designation</p>
                                <button type="button" class="btn shadow-0"
                                        style="font-size:2rem; color: <?php echo $color; ?>;"
                                        data-mdb-dismiss="modal">X
                                </button>
                            </div>

                            <div class="modal-body">
                                <input type="text" id="editDesig" class="form-control rounded-8 "
                                       placeholder="Enter Your Designation"
                                       style="background-color:<?php echo $bgColor; ?> ; border : 1px solid <?php echo $color ?>;
                                               color:<?php echo $color ?>;"/>
                            </div>
                            <div class="modal-footer  border-top-0">
                                <button type="button" class="btn shadow-0" data-mdb-ripple-init
                                        data-mdb-dismiss="modal">
                                    Close
                                </button>
                                <button type="button" class="btn " data-mdb-ripple-init onclick="ChangeDesi()"
                                        style="background-color: <?php echo $bgColor; ?> ; box-shadow: 2px 2px 2px 2px red ">
                                    Save changes
                                </button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function ChangeDesi() {
                            const oldDes = document.getElementById('designation');
                            const newDes = document.getElementById('editDesig').value;
                            if (newDes.trim() !== '') {
                                oldDes.textContent = newDes;

                            }
                        }
                    </script>

                </div>


                <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3  d-flex justify-content-center align-items-center  text-center"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  border: 1px solid <?php echo $color; ?> ;">
                    <a href="#" data-mdb-toggle="modal" data-mdb-target="#SkillModal">
                        <svg width="200" height="201" viewBox="0 0 200 201" fill="<?php echo $bgColor ?>"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M74.9999 164.677H125C127.622 164.677 129.75 166.805 129.75 169.444V181.978C129.75 191.52 122.007 199.278 112.5 199.278H87.4999C77.9927 199.278 70.2499 191.52 70.2499 181.978V169.444C70.2499 166.805 72.3777 164.677 74.9999 164.677Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M119.862 75.4405C119.862 86.446 110.966 95.3607 100 95.3607C89.034 95.3607 80.1375 86.446 80.1375 75.4405C80.1375 64.435 89.034 55.5203 100 55.5203C110.966 55.5203 119.862 64.435 119.862 75.4405Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M108.702 2.22923C141.46 6.03572 168.479 32.5158 172.826 65.2351C176.994 96.7051 161.739 126.357 133.872 140.851C131.294 142.184 129.75 144.84 129.75 147.698V149.722C128.219 149.335 126.621 149.143 125 149.143H75.0001C73.3794 149.143 71.781 149.335 70.2501 149.722V147.698C70.2501 144.817 68.625 142.181 66.1428 140.859L66.1363 140.856L66.1298 140.852C41.6903 128.139 26.5001 103.084 26.5001 75.4406C26.5001 54.4344 35.4434 34.411 51.0627 20.4072C66.6803 6.46751 87.6903 -0.227727 108.701 2.2291L108.702 2.22923ZM131.995 107.517L131.995 107.516C135.02 104.483 135.02 99.5694 131.995 96.536L129.86 94.3958C132.004 91.0097 133.582 87.236 134.483 83.2074H137.5C141.786 83.2074 145.251 79.7293 145.251 75.4406C145.251 71.1522 141.788 67.6737 137.501 67.6737H134.484C133.583 63.6452 132.005 59.8714 129.861 56.4853L131.996 54.3451L131.996 54.3449C135.021 51.3113 135.022 46.3981 131.996 43.3645C128.968 40.3292 124.061 40.329 121.034 43.3646L118.904 45.5003C115.528 43.3529 111.767 41.7718 107.751 40.8689V37.8386C107.751 33.5503 104.287 30.0717 100.001 30.0717C95.7141 30.0717 92.2507 33.5503 92.2507 37.8386V40.8689C88.2349 41.7718 84.4732 43.3529 81.0978 45.5003L78.9678 43.3646L78.9677 43.3645C75.9399 40.3294 71.033 40.3282 68.0053 43.3648C64.9805 46.3986 64.9803 51.3117 68.0055 54.3451L70.1399 56.4853C67.9962 59.8714 66.4183 63.6452 65.5176 67.6737H62.5001C58.2135 67.6737 54.7501 71.1522 54.7501 75.4406C54.7501 79.7289 58.2135 83.2074 62.5001 83.2074H65.5176C66.4183 87.236 67.9962 91.0097 70.1399 94.3958L68.0055 96.536L68.0053 96.5362C64.9805 99.57 64.9803 104.483 68.0055 107.517C69.5181 109.033 71.5043 109.793 73.4863 109.793C75.4684 109.793 77.4545 109.033 78.9672 107.517L81.0971 105.381C84.4726 107.528 88.2343 109.109 92.2501 110.012V113.043C92.2501 117.331 95.7135 120.809 100 120.809C104.287 120.809 107.75 117.331 107.75 113.043V110.012C111.766 109.109 115.528 107.528 118.903 105.381L121.033 107.517C122.546 109.033 124.532 109.793 126.514 109.793C128.496 109.793 130.482 109.033 131.995 107.517Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M12.5 80.2076H6.25C3.62787 80.2076 1.5 78.0798 1.5 75.4407C1.5 72.8016 3.62787 70.6738 6.25 70.6738H12.5C15.1221 70.6738 17.25 72.8016 17.25 75.4407C17.25 78.0798 15.1221 80.2076 12.5 80.2076Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M34.772 16.7732C35.7007 17.7044 36.9127 18.1686 38.1287 18.1686C39.3443 18.1686 40.5574 17.7043 41.4859 16.7733L34.772 16.7732ZM34.772 16.7732L30.3533 12.3425M34.772 16.7732L30.3533 12.3425M30.3533 12.3425C28.496 10.4802 28.4958 7.46195 30.3534 5.59883M30.3533 12.3425L30.3534 5.59883M30.3534 5.59883C32.2082 3.73852 35.2112 3.73852 37.0672 5.59896M30.3534 5.59883L37.0672 5.59896M37.0672 5.59896C37.0673 5.59901 37.0673 5.59905 37.0674 5.5991M37.0672 5.59896L37.0674 5.5991M37.0674 5.5991L41.486 10.0297C43.3432 11.8919 43.3435 14.9101 41.486 16.7732L37.0674 5.5991Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M33.71 146.677C32.4939 146.677 31.282 146.212 30.3533 145.281C28.496 143.419 28.4958 140.401 30.3533 138.538C30.3533 138.538 30.3534 138.538 30.3534 138.538L34.772 134.107C36.6271 132.247 39.6303 132.247 41.4861 134.107C43.3437 135.969 43.3437 138.987 41.486 140.851C41.4859 140.851 41.4859 140.851 41.4859 140.851L37.0672 145.281C36.1387 146.212 34.9256 146.677 33.71 146.677Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M193.75 80.2076H187.5C184.878 80.2076 182.75 78.0798 182.75 75.4407C182.75 72.8016 184.878 70.6738 187.5 70.6738H193.75C196.372 70.6738 198.5 72.8016 198.5 75.4407C198.5 78.0798 196.372 80.2076 193.75 80.2076Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M161.871 18.1691C160.655 18.1691 159.443 17.7049 158.515 16.7737C156.657 14.9114 156.657 11.8933 158.515 10.0301C158.515 10.0301 158.515 10.0301 158.515 10.03L162.933 5.59946L161.871 4.54023L162.933 5.59946C164.788 3.73938 167.792 3.73919 169.647 5.59959C171.505 7.46166 171.505 10.4797 169.647 12.343C169.647 12.3431 169.647 12.3431 169.647 12.3431L165.229 16.7737C164.3 17.7047 163.087 18.1691 161.871 18.1691Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M162.933 145.281C163.862 146.212 165.074 146.676 166.29 146.676C167.506 146.676 168.719 146.212 169.647 145.281L162.933 145.281ZM162.933 145.281L158.515 140.85M162.933 145.281L158.515 140.85M158.515 140.85C156.657 138.988 156.657 135.97 158.515 134.106M158.515 140.85L158.515 134.106M158.515 134.106C160.369 132.246 163.372 132.246 165.228 134.107M158.515 134.106L165.228 134.107M165.228 134.107C165.229 134.107 165.229 134.107 165.229 134.107M165.228 134.107L165.229 134.107M165.229 134.107L169.647 138.537C171.504 140.399 171.505 143.418 169.647 145.281L165.229 134.107Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                        </svg>

                    </a>
                </div>
            </div>

            <!-- Second-Row -->
            <div class="row m-5 d-flex justify-content-evenly ">
                <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center   text-center"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  border: 1px solid  <?php echo $color; ?> ;">
                    <a href="#" data-mdb-toggle="modal" data-mdb-target="#certificates-modal">
                        <svg width="176" height="220" viewBox="0 0 176 220" fill="<?php echo $bgColor ?>>"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="176" height="220" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_211_38" transform="scale(0.00568182 0.00454545)"/>
                                </pattern>
                                <image id="image0_211_38" width="176" height="220"
                                       xlink:href="data:image/png;base64,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"/>
                            </defs>
                        </svg>

                    </a>
                </div>

                <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center    text-center"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid  <?php echo $color; ?> ;">
                    <a href="#" data-mdb-toggle="modal" data-mdb-target="#EducationModal">
                        <svg width="220" height="180" viewBox="0 0 220 180" fill="<?php echo $bgColor ?>"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M214.843 51.8828L214.843 51.883C216.256 52.5886 217.412 53.5894 218.021 54.6797C218.592 55.7016 218.714 56.837 218.046 58.1251C217.364 59.4406 216.245 60.1901 214.492 61.2644L214.491 61.2649C183.066 80.5395 151.64 99.814 120.214 119.089C118.083 120.396 116.595 121.159 115.688 121.468L115.687 121.469C111.982 122.738 107.749 122.714 104.108 121.387L104.107 121.387C103.219 121.064 101.668 120.246 99.3833 118.844L99.3831 118.844C67.5625 99.3272 35.7438 79.8111 3.92693 60.2959L3.92593 60.2953C2.64405 59.5104 1.84072 58.3817 1.5 56.7994V56.0449C1.75996 54.9302 2.21154 54.1607 2.83534 53.5248C3.51981 52.8271 4.47024 52.2292 5.81103 51.5589L5.81122 51.5588C37.8173 35.55 69.8252 19.5432 101.835 3.53832C104.374 2.27158 106.279 1.7003 108.849 1.5H110.983C113.56 1.67431 115.517 2.21714 118.023 3.4699L214.843 51.8828Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M204.153 151.641L204.151 151.646C203.929 152.119 203.572 152.475 203.302 152.71C203.012 152.962 202.686 153.191 202.399 153.382C202.261 153.474 202.064 153.602 201.89 153.715C201.767 153.794 201.656 153.865 201.585 153.912C201.334 154.078 201.189 154.185 201.114 154.252L201.112 154.254C194.783 159.937 197.793 170.232 206.174 171.532C210.18 172.152 214.377 170.019 216.261 166.511L217.582 167.22L216.261 166.511C218.918 161.564 217.213 156.03 212.342 153.009L212.341 153.008C211.968 152.777 211.514 152.452 211.195 151.933C210.86 151.386 210.789 150.815 210.789 150.314C210.789 128.304 210.784 106.293 210.774 84.2815V84.2809C210.774 84.1858 210.768 84.0762 210.755 83.9639C208.773 85.0783 207.119 86.0708 205.788 86.9424C204.784 87.6001 204.418 88.2424 204.418 89.1024L204.153 151.641ZM204.153 151.641C204.329 151.262 204.42 150.849 204.42 150.431L204.153 151.641ZM204.42 150.43C204.426 130.004 204.425 109.561 204.418 89.1028L204.42 150.43Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                            <path d="M97.6271 179.023C101.152 179.306 104.105 179.491 106.484 179.58H113.69C130.196 179.075 146.674 175.923 161.887 169.428L97.6271 179.023ZM97.6271 179.023C84.0165 177.936 70.924 174.759 58.3496 169.493M97.6271 179.023L58.3496 169.493M161.298 168.048C169.395 164.588 177.081 160.048 183.394 154.009L183.394 154.009C187.439 150.14 190.858 145.293 191.961 139.981C192.185 138.904 192.312 137.315 192.314 135.162C192.323 121.931 192.337 108.701 192.356 95.4709V95.4689C192.36 94.1182 192.202 93.4754 192.092 93.2631L192.091 93.2614C191.964 93.0179 191.855 92.8836 191.783 92.8149C191.748 92.782 191.724 92.7663 191.713 92.7597C191.707 92.7563 191.704 92.7546 191.702 92.754L191.701 92.7533L191.7 92.7532L191.7 92.753L191.698 92.7527C191.696 92.7525 191.691 92.752 191.684 92.752C191.67 92.7519 191.641 92.7534 191.593 92.7642C191.493 92.7869 191.328 92.8471 191.092 92.9922L191.091 92.9925C169.062 106.501 147.025 119.998 124.98 133.484L124.98 133.484C117.027 138.349 106.736 138.742 98.3277 135.21L98.3267 135.21C97.0223 134.661 95.2833 133.709 93.1406 132.395L93.1401 132.395C72.4813 119.717 51.814 107.052 31.1382 94.3998L31.1381 94.3997C30.2096 93.8315 29.499 93.7383 29.0709 93.8399C28.7399 93.9185 28.2842 94.1813 27.9593 95.1696C27.7606 95.779 27.6899 96.2268 27.6899 96.5386V96.5392C27.6842 109.248 27.6813 121.957 27.6813 134.668C27.6842 138.249 27.8872 140.68 29.0344 143.389L29.0346 143.389C31.6474 149.562 36.9057 154.976 42.4482 158.955L42.4487 158.955C47.4633 162.557 52.9553 165.609 58.9287 168.11L58.929 168.11C71.3567 173.314 84.294 176.454 97.7466 177.528L97.7468 177.528C101.246 177.808 104.166 177.992 106.512 178.08H113.667M161.298 168.048L113.644 178.081C113.652 178.081 113.659 178.081 113.667 178.08M161.298 168.048C146.289 174.457 130.008 177.577 113.667 178.08M161.298 168.048L113.667 178.08M58.3496 169.493C52.2764 166.951 46.6844 163.844 41.5736 160.173M58.3496 169.493L41.5736 160.173M41.5736 160.173C35.9048 156.104 30.4123 150.492 27.6532 143.974L41.5736 160.173Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                        </svg>

                    </a>
                </div>

                <div class="col-lg-3 col-md-8 col-sm-12 m-2 p-3 d-flex justify-content-center align-items-center   text-center"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?> ;">
                    <a href="#" data-mdb-toggle="modal" data-mdb-target="#AboutModal">
                        <svg width="200" height="204" viewBox="0 0 200 204" fill="<?php echo $bgColor ?>"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect width="200" height="204" fill="<?php echo $bgColor ?>"/>
                            <path d="M122.09 159.182L121.373 159.471C116.217 161.547 112.098 163.127 108.997 164.225C108.997 164.225 108.996 164.225 108.996 164.225L108.495 162.812C105.431 163.9 101.867 164.444 97.8116 164.444C91.581 164.444 86.7302 162.889 83.2762 159.789C79.8222 156.689 78.1037 152.76 78.1037 147.985C78.1037 146.129 78.2307 144.229 78.4847 142.295L122.09 159.182ZM122.09 159.182L122.271 158.431L123.99 151.289L124.722 148.247L121.892 149.582C121.11 149.95 119.785 150.415 117.843 150.962C115.948 151.491 114.337 151.744 112.948 151.744C109.705 151.744 107.82 151.177 106.907 150.416L106.9 150.41C106.084 149.739 105.424 148.236 105.424 145.283C105.424 144.198 105.609 142.487 106.019 140.138C106.436 137.797 106.892 135.724 107.399 133.93L107.401 133.922L113.803 110.803C113.804 110.799 113.805 110.795 113.807 110.792C114.462 108.558 114.909 106.141 115.145 103.512C115.373 100.979 115.498 99.1365 115.498 98.0496C115.498 92.7911 113.659 88.4135 109.98 85.0593L109.975 85.0554C106.254 81.6897 101.073 80.0914 94.6455 80.0914C91.036 80.0914 87.239 80.7458 83.2622 82.0469C79.3669 83.3045 75.2909 84.8214 71.0432 86.5876L70.3369 86.8812L70.1598 87.6253L68.4582 94.775L67.7946 97.5636L70.464 96.5192C71.645 96.0572 73.105 95.5792 74.8361 95.0365C76.4518 94.5517 78.0137 94.3254 79.5175 94.3254C82.8618 94.3254 84.5979 94.9121 85.3555 95.6376C86.103 96.3707 86.6947 97.9205 86.6947 100.752C86.6947 102.299 86.5208 104.023 86.1472 105.929C85.7653 107.859 85.2824 109.942 84.7217 112.145L122.09 159.182ZM97.0184 65.239L97.0214 65.2419C100.319 68.3412 104.312 69.8972 108.885 69.8972C113.467 69.8972 117.436 68.3403 120.71 65.2376C123.99 62.1292 125.665 58.302 125.665 53.8474C125.665 49.4107 123.991 45.5695 120.717 42.4375C117.45 39.2953 113.468 37.7285 108.885 37.7285C104.309 37.7285 100.313 39.2956 97.0148 42.4332L97.0119 42.436C93.7419 45.5635 92.0365 49.4034 92.0365 53.8474C92.0365 58.2976 93.732 62.1331 97.0184 65.239ZM1.5 101.996C1.5 46.4704 45.6309 1.5 99.9958 1.5C154.361 1.5 198.5 46.4706 198.5 101.996C198.5 157.521 154.361 202.5 99.9958 202.5C45.6311 202.5 1.5 157.521 1.5 101.996Z"
                                  stroke="<?php echo $color ?>" stroke-width="3"/>
                        </svg>

                    </a>
                </div>
            </div>

        </div>

        <!-- Third-Row -->
        <div class="col-12">
            <div class="row ">

                <div class="col-lg-4  col-12 g-2">
                    <div class="row d-flex justify-content-end align-items-end">
                        <?php
                        while ($row = mysqli_fetch_assoc($resQuery6)) {
                            ?>
                            <a href="<?php echo $row['url'] ?>"
                            <button
                                    type="button" class="btn btn-sm rounded-6 col-2 m-1"
                                    style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;    border: 1px solid <?php echo $color; ?>">
                                <i class="fi fi-brands-<?php echo $row['hostname'] ?> fa-2x"></i>
                            </button>
                            </a>
                            <?php
                        }
                        ?>
                        <button
                                type="button" class="  btn btn-sm rounded-6 col-2 m-1" data-mdb-toggle="modal"
                                data-mdb-target="#LinksModal"
                                style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;    border:2px dashed <?php echo $color; ?>">
                            <i class="fi fi-sr-add fa-2x"></i>
                        </button>
                        <!--LinksModal -->
                        <div class="modal left fade" id="LinksModal" tabindex="-1" aria-labelledby="LinksModalLabel"
                             aria-hidden="true" data-mdb-backdrop="false" data-mdb-keyboard="true">
                            <div class="modal-dialog modal-dialog-centered ">
                                <div class="modal-content "
                                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;">

                                    <div class="modal-header border-bottom-0 d-flex justify-content-between">

                                        <p class="modal-title"
                                           style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;  color: <?php echo $color; ?>;"
                                           id="LinksModalLabel">
                                            Add Link</p>
                                        <button type="button" class="btn shadow-0"
                                                style="font-size:2rem; color: <?php echo $color; ?>;"
                                                data-mdb-dismiss="modal">X
                                        </button>
                                    </div>

                                    <div class="modal-body">

                                        <input type="url" id="link1" class="form-control rounded-8 m-2"
                                               placeholder="Enter Your links"
                                               style=" background-color: <?php echo $bgColor; ?> ; color: <?php echo $color ?>; border : 1px solid <?php echo $color ?>">
                                        <input type="url" id="link2" class="form-control rounded-8 m-2"
                                               placeholder="Enter Your links"
                                               style=" background-color: <?php echo $bgColor; ?> ; color: <?php echo $color ?>; border : 1px solid <?php echo $color ?>">
                                        <input type="url" id="link3" class="form-control rounded-8 m-2"
                                               placeholder="Enter Your links"
                                               style=" background-color: <?php echo $bgColor; ?> ; color: <?php echo $color ?>; border : 1px solid <?php echo $color ?>">
                                        <input type="url" id="link4" class="form-control rounded-8 m-2"
                                               placeholder="Enter Your links"
                                               style=" background-color: <?php echo $bgColor; ?> ; color: <?php echo $color ?>; border : 1px solid <?php echo $color ?>">

                                    </div>

                                    <div class="modal-footer  border-top-0">
                                        <button type="button" class="btn shadow-0" data-mdb-ripple-init
                                                data-mdb-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn " onclick="AddLinks()" data-mdb-ripple-init
                                                style="box-shadow : 2px 2px 2px 2px <?php echo $color ?>;"> ADD
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8  col-12 d-flex justify-content-center align-items-center  ">
                    <div class="col-6  d-flex justify-content-end align-items-center m-2 g-0">
                        <button
                                type="button" class="btn btn-lg p-lg-2 p-4  w-100 rounded-6"
                                style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;
                                        font-size: 1.3rem;
                                        ">
                            Home
                        </button>
                    </div>
                    <div class="col-6">
                        <button
                                type="button" class=" btn btn-lg rounded-6 "
                                style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;font-size: 1.3rem;">
                            CREATE YOUR PORTFOLIO

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODALS -->

<!-- Projects-Model -->
<div class="modal top fade mt-1" id="ProjectModal" tabindex="-1" aria-labelledby="ProjectModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid  <?php echo $color; ?>">
            <div class="modal-header border-bottom-0 d-flex justify-content-end">
                <button type="button" class="btn shadow-0  col-2 "
                        style="font-size:2rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>
            <div class="modal-header border-bottom-0 row ">
                <div class="p-lg-2 p-0 col-lg-3 col-3">
                    <svg width="200" height="10vh" viewBox="0 0 200 181" fill="<?php echo $bgColor ?>"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M140.785 32.4896L140.789 30.9853L140.822 19.6335C140.822 19.6333 140.822 19.633 140.822 19.6327C140.833 14.7904 138.96 10.2416 135.543 6.81308C132.122 3.38422 127.58 1.5 122.734 1.5H77.3193C67.3801 1.5 59.2655 9.5869 59.2311 19.5352C59.2311 19.5356 59.2311 19.536 59.2311 19.5363M140.785 32.4896L57.7311 19.5312L59.2311 19.5363M140.785 32.4896H142.289H171.5C186.425 32.4896 198.5 44.5691 198.5 59.4076V81.9219C195.753 87.9889 189.692 92.1564 182.583 92.1564H126.5V91.9067C126.5 77.3292 114.579 65.4067 100 65.4067C85.4213 65.4067 73.5 77.3292 73.5 91.9067V92.1564H17.4174C10.3075 92.1564 4.24717 87.9889 1.5 81.9219V59.4076C1.5 44.5691 13.5758 32.4896 28.4993 32.4896H57.7006H59.1966L59.2006 30.9936L59.2311 19.5363M140.785 32.4896L59.2311 19.5363M125.879 16.474L125.869 16.4638L125.859 16.4538C125.386 15.9871 124.337 15.1667 122.734 15.1667H77.3193C74.8844 15.1667 72.9042 17.1468 72.8978 19.5758C72.8978 19.576 72.8978 19.5761 72.8978 19.5763L72.8652 30.9853L72.8609 32.4896H74.3652H125.623H127.118L127.123 30.9939L127.155 19.5925V19.5882C127.155 17.9943 126.34 16.9468 125.879 16.474Z"
                              stroke="<?php echo $color ?>" stroke-width="3"/>
                        <path d="M100 135.574C113.647 135.574 124.994 125.194 126.313 111.823H182.583C188.288 111.823 193.67 110.524 198.5 108.21V152.157C198.5 166.991 186.425 179.075 171.5 179.075H28.4993C13.5759 179.075 1.5 166.991 1.5 152.157V108.21C6.33054 110.524 11.7129 111.823 17.4174 111.823H73.6871C75.0064 125.194 86.3529 135.574 100 135.574Z"
                              stroke="<?php echo $color ?>" stroke-width="3"/>
                        <path d="M106.833 91.91V109.106C106.833 112.883 103.774 115.939 99.9996 115.939C96.2255 115.939 93.1663 112.883 93.1663 109.106V91.91C93.1663 88.1328 96.2255 85.0767 99.9996 85.0767C103.774 85.0767 106.833 88.1328 106.833 91.91Z"
                              stroke="<?php echo $color ?>" stroke-width="3"/>
                    </svg>
                </div>
                <div class="modal-title  col-lg-2 col-4 ms-lg-2 ms-1 text-start"
                     style=" background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; font-size: 5vw;"
                     id="ProjectModalLabel">
                    Projects
                </div>
                <div class="col-lg-7 col-5"> </div>



            </div>

            <div class="modal-body  p-5 ">

                <div id="myCarousel1" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">

                                    <div class="col-lg-4 col-12 p-3 g-4 d-flex">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resQuery4)){
                                        ?>
                                        <div class="card rounded-0 shadow-0"
                                             style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid  <?php echo $color; ?>  ">
                                            <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                 style="border: 1px solid <?php echo $color; ?>">
                                                <i class="fas fa-<?php echo $row['icon'] ?>"
                                                   style="color: <?php echo $color; ?>;"></i>
                                                <i class="fas fa-2x fa-angle-right"
                                                   style=" color: <?php echo $color; ?>; " data-mdb-toggle="modal"
                                                   data-mdb-target="#ViewModal"></i>
                                            </div>
                                            <div class="card-body " style="border: 1px solid <?php echo $color; ?>">
                                                <p class="card-text " style="color: <?php echo $color; ?>; ">
                                                    <?php echo $row['title'] ?> <br>
                                                </p>
                                            </div>
                                            <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                 style="border:  1px solid <?php echo $color ?>">
                                                <?php echo $row['start_date'] ?> - <?php echo $row['end_date'] ?>

                                                <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                   id="dropdownMenuButton"
                                                   data-mdb-dropdown-init
                                                   data-mdb-ripple-init
                                                   data-mdb-toggle="dropdown" aria-expanded="false"
                                                   style="color: <?php echo $color; ?>;">

                                                </i>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <li><a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                           data-mdb-target="#editModal">
                                                            <i class="fas fa-pen me-2"></i> Edit </a></li>

                                                    <li><a class="dropdown-item" href="#" data-mdb-toggle="modal"
                                                           data-mdb-target="#DeleteModal"> <i
                                                                    class="fas fa-trash-can me-2"></i> Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- for creating new projects -->
                                        <div class="col-12 p-3 m-1 g-4">
                                            <div class="card rounded-0 shadow-0 w-full h-100"
                                                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; ">

                                                <div class="card-body  d-flex justify-content-center align-items-center"
                                                     style="border:2px dashed <?php echo $color; ?>">
                                                    <div data-mdb-toggle="modal" data-mdb-target="#UpdateModal">
                                                        <i class="fi fi-ss-add fa-2x"
                                                           style="color: <?php echo $color; ?>;"></i>
                                                        <p class="card-text " style="color: <?php echo $color; ?>;">
                                                            Add Project
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon " style="color: <?php echo $color; ?> "
                                  aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon " style="color: <?php echo $color; ?> "
                                  aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Delete Project Modal -->
<div class="modal top fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?>">
            <div class="modal-header " style=" border : 1px solid <?php echo $color ?> ">
                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                <button type="button" class="btn" data-mdb-dismiss="modal" aria-label="Close"> X</button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Project Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn shadow-0">
                    YES
                </button>
                <button type="button" class="btn" style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">No</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Project Modal -->
<div class="modal top fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style="border :1px solid <?php echo $color; ?>">
                <h5 class="modal-title" id="editModalLabel">Edit Project</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size: 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <p class="error-message" id="messageIcon2">Please Select any icon</p>
                <!-- choose-icon -->
                <small>Choose icon</small>
                <div class="row d-flex">
                    <div class="col-12 container g-6 ">

                        <button class="btn btn-floating " id="setting" name="icon" value="setting"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-gears fa-xl"></i>
                        </button>

                        <button class="btn btn-floating  " id="computer" name="icon" value="computer"
                                onclick="radioCheck(this);" style=" border : 1px solid <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-display-code fa-xl"></i>
                        </button>

                        <button class="btn btn-floating" id="draw" name="icon" value="draw"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-palette fa-xl"></i>
                        </button>

                        <button class="btn btn-floating " id="mobile" name="icon" value="mobile"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-mobile-button fa-xl"></i>
                        </button>

                        <button class="btn btn-floating " id="book" name="icon" value="book"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-book-spells fa-xl"></i>
                        </button>

                        <button class="btn btn-floating " id="comment" name="icon" value="comment"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-comments fa-xl"></i>
                        </button>

                        <button class="btn btn-floating " id="chart" name="icon" value="chart"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;  ">
                            <i class="fi fi-ss-chart-line-up fa-xl"></i>
                        </button>
                    </div>
                </div>
                <!--  project-title -->
                <input type="text" class="form-control rounded-8 mt-2" id="titles"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       placeholder=" Project-title"/>
                <div class="row mt-2">
                    <small>Project Duration</small>
                    <div class="col-lg-6 col-6 mt-1">
                        <div data-mdb-format="dd-mm-yyyy" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_start"
                                   data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?>;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div data-mdb-format="dd-mm-yyyy" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_end"
                                   data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0">
                <button type="button" onclick="EditProjectModal();" class="btn "
                        style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">Update
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Add-Project -->
<div class="modal top fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style=" border : 1px solid <?php echo $color; ?> ;">
                <h5 class="modal-title" id="UpdateModalLabel">Add Project</h5>
                <button type="button" class="btn  shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size : 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- choose-icon -->
                <div>
                    <p class="text-danger" id="error_message"></p>
                </div>
                <p>Choose icon</p>
                <div class="row d-flex">
                    <div class="col-12 container g-6">

                        <button class="btn btn-floating m-1" id="setting" name="icon" value="setting"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-gears fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="computer" name="icon" value="computer"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-display-code fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="draw" name="icon" value="draw"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-palette fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="mobile" name="icon" value="mobile"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-mobile-button fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="book" name="icon" value="book"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>; ">
                            <i class="fi fi-ss-book-spells fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="comment" name="icon" value="comment"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-comments fa-xl"></i>
                        </button>

                        <button class="btn btn-floating m-1" id="chart" name="icon" value="chart"
                                onclick="radioCheck(this);" style="background-color: <?php echo $bgColor; ?>;">
                            <i class="fi fi-ss-chart-line-up fa-xl"></i>
                        </button>
                        <input type="hidden" id="Project_icons">
                    </div>


                </div>
                <!--  project-title -->
                <input type="text" class="form-control rounded-8 mt-2" id="title"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       placeholder="Project Title"/>

                <!-- project-duration -->

                <div class="row mt-2">
                    <small>Project Duration</small>
                    <div class="col-lg-6 col-6 mt-1">
                        <div data-mdb-format="dd-mm-yyyy" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_start"
                                   data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <div data-mdb-format="dd-mm-yyyy" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="proj_end"
                                   data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-top-0">

                <button type="button" onclick="AddProjectModal();" class="btn mx-auto"
                        style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">CREATE
                </button>
            </div>
        </div>
    </div>
</div>

<!--  View Project-->
<div class="modal top fade" id="ViewModal" tabindex="-1" aria-labelledby="ViewModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header ">
                <h5 class="modal-title" id="ViewModalLabel">View Project</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

            </div>
            <div class="modal-footer border-top-0">

                <button type="button" class="btn align-self-end" style="background-color: <?php echo $color; ?>;">
                    CLOSE
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Skills-Modal -->
<div class="modal top fade" id="SkillModal" tabindex="-1" aria-labelledby="SkillModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-lg-4 p-2"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border:1px solid <?php echo $color; ?> ;">

            <div class="modal-header border-bottom-0 row">
                <img src="img/Group 33.png" class="col-2 img-fluid" style="width: 10vw;" alt="Skill icon">
                <p class="modal-title  col-8 d-flex justify-content-start  "
                   style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="SkillModalLabel">
                    Skills</p>
                <button type="button" class="btn shadow-0 col-2" style="font-size:1.2rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>
            <div class="modal-body">

                <ul class="list-group ">
                    <li class="list-group-item shadow-0 border border-0"
                        style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>">
                        <div class="row g-0">

                            <?php
                            while ($row = mysqli_fetch_assoc($resQuery1)) {
                                ?>
                                <div class="col-1 text-center">
                                    <i class="fi fi-bs-dot-circle " style="color: <?php echo $color; ?>;"></i>
                                </div>
                                <div class="col-5">
                                    <p class="ps-1" style="font-size: 1rem; color: <?php echo $color; ?>;">
                                        <?php echo $row['name'] ?>
                                        <i class="fi fi-ss-pen-clip fa-xs" data-mdb-toggle="modal"
                                           data-mdb-target="#UpdateSkillModal"></i>

                                        <i class="fi fi-ss-cross-small fa-xs" data-mdb-toggle="modal"
                                           data-mdb-target="#DeleteSkillModal"></i>
                                        <?php
                                        $skillId = $row['Skill_Id'];
                                        $_SESSION['stored_skill_id'] = $skillId;
                                        ?>
                                    </p>
                                </div>
                                <div class="progress col-6"
                                     style="height: 2.5vh; background: transparent;border:1px solid <?php echo $color; ?> ;">
                                    <div class="progress-bar  text-dark" role="progressbar"
                                         style="width: <?php echo $row['ranges'] ?>%; background-color: <?php echo $color; ?>;"
                                         aria-valuenow="<?php echo $row['ranges'] ?>"
                                         aria-valuemin="0"
                                         aria-valuemax="100">
                                        <?php echo $row['ranges'] ?>
                                    </div>
                                    <br><br>
                                </div>

                                <?php
                            }
                            ?>

                        </div>
                    </li>

                </ul>
                <!-- for creating new skills  -->
                <button class="btn rounded-8 shadow-0 btn-sm add_elm" data-mdb-toggle="modal"
                        data-mdb-target="#addSkillModal"
                        style=" border: 2px dashed <?php echo $color ?> ; color: <?php echo $color; ?> ">
                    <i class="fas fa-plus" style=" color: <?php echo $color; ?> "> </i> Add Skills
                </button>

            </div>
        </div>
    </div>
</div>

<!-- add Skills -->
<div class="modal top fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <form action="ajax/AddSkill.php" method="POST">
                <div class="modal-header " style="border : 1px solid <?php echo $color ?>">
                    <h5 class="modal-title" id="addSkillModalLabel">Add Skills</h5>
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                            style="color: <?php echo $color; ?>; font-size:1.2rem;">X
                    </button>
                </div>
                <div class="modal-body border-bottom-0"
                     style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">

                    <?php
                    if (isset($_SESSION['status'])) {
                        ?>
                        <p> Uploaded Successfully </p>
                        <script>
                            location.reload();
                        </script>
                        <?php
                        unset($_SESSION['status']);
                    }
                    ?>


                    <input type="text" id="skillName" name="skillName"
                           class="form-control rounded-7 mb-2 p-2 form-group" placeholder="Skill Name" required
                           style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">


                    <!-- 2 DropDown -->

                    <select class="form-select rounded-7 p-2 mb-2 form-group" id="Update_skill_type"
                            name="Update_skill_type" required
                            style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                        required="">
                        <option selected="" disabled="" value="Skill Type">Skill Type</option>
                        <option value="Technical">Technical</option>
                        <option value="Functional">Functional</option>
                    </select>

                    <!-- range -->
                    <div class="form-group">
                        <label class="form-label m-2 " for="customRange" style="color: <?php echo $color ?>;">Skill
                            Proficiency :</label>
                        <div class="range" style="color:<?php echo $color; ?> ">
                            <input type="range" required class="form-range" id="customRange9" name="customRange9"/>
                        </div>
                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-end border-top-0 form-group">
                    <button type="button" class="btn shadow-0" style="background-color: <?php echo $bgColor; ?>;">
                        CLOSE
                    </button>
                    <button type="submit" class="btn" name="Save_Skill"
                            style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">ADD
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>


<!--delete skills list -->
<div class="modal top fade" id="DeleteSkillModal" tabindex="-1" aria-labelledby="DeleteModalLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?>">
            <div class="modal-header " style=" border : 1px solid <?php echo $color ?> ">
                <h5 class="modal-title" id="DeleteModalLabel">Delete</h5>
                <button type="button" class="btn" data-mdb-dismiss="modal" aria-label="Close"> X</button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Skill Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn delete-skill-icon " data-skill-id="<?php echo $skillId; ?>"
                        style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;"
                        data-mdb-dismiss="modal">
                    YES
                </button>
                <button type="button" class="btn shadow-0">No</button>
            </div>
        </div>
    </div>
</div>


<?php

$storedSkillId = $_SESSION['stored_skill_id'];

$SkillDisplay = " SELECT * FROM `Skills` WHERE `skill_Id` = '$skillId' ";
$resQuery7 = mysqli_query($link, $SkillDisplay);


?>

<!--update Skills-->
<div class="modal top fade" id="UpdateSkillModal" tabindex="-1" aria-labelledby="UpdateModalLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style="border : 1px solid <?php echo $color ?>">
                <h5 class="modal-title" id="UpdateModalLabel">Edit Skills</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size:1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!--  Skill-title -->
                <form>
                    <?php
                    while ($row = mysqli_fetch_assoc($resQuery7)) {
                        ?>
                        <p class="error-message" id="skillSection2"></p>


                        <input type="text" id="skillName2" class="form-control rounded-7 mb-2 p-2 skillName2"
                               value="<?php echo $row['name'] ?>" name="skillName"
                               placeholder="<?php echo $row['name'] ?>"
                               style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">


                        <!-- 2 DropDown -->

                        <select class="form-select rounded-7 p-2 mb-2" id="Update_skill_type2" name="skillType"
                                style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                            required="">
                            <option selected=" " disabled=""
                                    value="<?php echo $row['type'] ?>"><?php echo $row['type'] ?></option>
                            <option value="Technical">Technical</option>
                            <option value="Functional">Functional</option>
                        </select>

                        <!-- range -->
                        <div>
                            <label class="form-label m-2 " for="customRange2" style="color: <?php echo $color ?>;">Skill
                                Proficiency :</label>
                            <div class="range" style="color:<?php echo $color; ?> ">
                                <input type="range" class="form-range" value="<?php echo $row['ranges'] ?>"
                                       name=ranges
                                       id="customRange2"/>
                            </div>
                        </div>

                        <?php
                    }
                    ?>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-end border-top-0">
                <button type="button" class="btn  shadow-0" style="background-color: <?php echo $bgColor; ?>;">CLOSE
                </button>
                <button type="submit" class="btn" name="updatesubmit"
                        style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>; ">UPDATE
                </button>
            </div>
        </div>
    </div>
</div>

<!-- certificates-modal -->
<div class="modal top fade" id="certificates-modal" tabindex="-1" aria-labelledby="certificates-modalLabel"
     aria-hidden="true" data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-center g-0 ">
        <div class="modal-content p-lg-4 p-2"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid <?php echo $color; ?> ;">

            <div class="modal-header border-bottom-0 row ">
                <img src="img/Group 3.png" class="col-2 img-fluid" style="width: 10vw;" alt="Certificate Image">
                <p class="modal-title  col-8 d-flex justify-content-start "
                   style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="certificates-modalLabel">
                    Certificates</p>
                <button type="button" class="btn shadow-0 col-2"
                        style="font-size:1.2rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>

            <div class="modal-body p-5">
                <div id="#Certificate" class="carousel slide text-center" data-bs-ride="carousel"
                     data-mdb-carousel-init>
                    <div class="carousel-inner">
                        <!-- First Item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <!-- Place your cards here -->
                                    <!-- First-Card -->
                                    <div class="col-lg-4 col-12 p-3 g-3 m-2 d-flex justify-content-between align-items-center">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resQuery2)) {
                                            ?>
                                            <div class="card rounded-0 shadow-0 m-1"
                                                 style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid <?php echo $color; ?> ;">
                                                <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                     style="border:1px solid <?php echo $color; ?> ;">
                                                    <i class="fi fi-ss-<?php echo $row['icon'] ?> "
                                                       style="color: <?php echo $color; ?>;"></i>
                                                    <i class="fi fi-ss-file" data-mdb-toggle="modal"
                                                       data-mdb-target="#ViewCertificate"
                                                       style="color: <?php echo $color; ?>;"></i>
                                                </div>
                                                <div class="card-body "
                                                     style="border:1px solid <?php echo $color; ?> ;">
                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        <?php echo $row['certi_name'] ?> <br>
                                                        <span class="text-muted "><?php echo $row['insti_name'] ?></span>
                                                    </p>
                                                </div>
                                                <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                     style="border:1px solid <?php echo $color; ?> ;"> <?php echo $row['start-date'] ?>
                                                    -
                                                    <?php echo $row['end_date'] ?>


                                                    <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                       id="dropdownMenuButton"
                                                       data-mdb-toggle="dropdown" aria-expanded="false"
                                                       style="color: <?php echo $color; ?>;">

                                                    </i>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                               data-mdb-target="#editCertificate"> <i
                                                                        class="fas fa-pen me-2"></i> Edit </a></li>
                                                        <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                               data-mdb-target="#deleteCertificate"> <i
                                                                        class="fas fa-trash-can me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div> <br>
                                            <?php
                                        }
                                        ?>
                                        <div class=" col-12 m-1 g-4">
                                            <div class="card rounded-0 shadow-0 w-full h-100"
                                                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                                                <div class="card-body  d-flex justify-content-center align-items-center"
                                                     style="border:2px dashed <?php echo $color; ?> ;">
                                                    <div data-mdb-toggle="modal" data-mdb-target="#addCertificate">
                                                        <i class="fi fi-ss-add fa-2x"
                                                           style="color: <?php echo $color; ?>;"></i>


                                                        <p class="card-text " style="color: <?php echo $color; ?>;">
                                                            Add Certificates
                                                        </p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" type="button" data-mdb-target="#Certificate"
                            data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-mdb-target="#Certificate"
                            data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- edit certificates -->
<div class="modal top fade" id="editCertificate" tabindex="-1" aria-labelledby="editCertificateLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style="border : 1px solid <?php echo $color ?>">
                <h5 class="modal-title" id="editCertificateLabel">Edit Certificates</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size: 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon3"></p>

                <div class="row d-flex">
                    <div class="col-12 container m-2 g-6">
                        <button class="btn  btn-floating" id="certificate" name="icon" value="certificate"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-certificate "></i></button>
                        <button class="btn btn-floating" id="award" name="icon" value="award"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-award "></i></button>
                        <button class="btn btn-floating" id="medal" name="icon" value="medal"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-medal"></i></button>
                        <button class="btn btn-floating" id="trophy" name="icon" value="trophy"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-trophy"></i></button>
                    </div>
                </div>
                <!--  project-title -->


                <input id="certi_name" name="certi_name" type="text" placeholder="Certification Name:"
                       aria-placeholder="Certification Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       data-listener-added_74bc56c3="true">
                <input id="certi_inst" name="certi_inst" type="text" placeholder="Institution Name:"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_start"
                                   name="certi_start" data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_end"
                                   name="certi_end" data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>
                <input type="file" class="form-control rounded-9 form-control-lg" name="certi_image"
                       id="certi_image"
                       accept=".jpg, .jpeg, .png, .pdf"
                       style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">

                <div class="modal-footer d-flex justify-content-end border-top-0">
                    <button type="button" class="btn shadow-0 ">CLOSE
                    </button>
                    <button type="button" class="btn " style="box-shadow : 2px 2px 2px 2px <?php echo $color ?>"
                            onclick="editCertificate();">UPDATE
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  View Certificate-->

<div class="modal top fade" id="ViewCertificate" tabindex="-1" aria-labelledby="ViewCertificateLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header ">
                <h5 class="modal-title" id="ViewCertificateLabel">Certificate</h5>
                <button type="button" class="btn-close shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>;"></button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <div class="card">

                </div>
            </div>
            <div class="modal-footer border-top-0">

                <button type="button" class="btn align-self-end" style="background-color: <?php echo $color; ?>;">
                    CLOSE
                </button>
            </div>
        </div>
    </div>
</div>

<!--  add Certificate-->
<div class="modal top fade" id="addCertificate" tabindex="-1" aria-labelledby="addCertificateLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style="border: 1px solid <?php echo $color; ?> ;">
                <h5 class="modal-title" id="addCertificateLabel">Add Certificates</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size: 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon4">Please Select any icon</p>
                <p class="error-message" id="messageCertificate2">Enter Certificate Name</p>
                <p class="error-message" id="messageInstitution2">Enter Institution Name</p>
                <p class="error-message" id="MessageDate4">Enter Starting date</p>
                <p class="error-message" id="MessageFile2">Please Upload Certificate</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="certificate" name="icon" value="certificate"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-certificate "></i></button>
                        <button class="btn btn-floating" id="award" name="icon" value="award"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-award "></i></button>
                        <button class="btn btn-floating" id="medal" name="icon" value="medal"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-medal"></i></button>
                        <button class="btn btn-floating" id="trophy" name="icon" value="trophy"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-trophy"></i></button>
                    </div>


                </div>
                <!--  project-title -->

                <input id="certi_name2" name="certi_name" type="text" placeholder="Certification Name:"
                       aria-placeholder="Certification Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       data-listener-added_74bc56c3="true">
                <input id="certi_inst2" name="certi_inst" type="text" placeholder="Institution Name:"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>; ">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_start"
                                   name="certi_start" data-mdb-toggle="datepicker" placeholder="Starting Date:"
                                   aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input type="text" class="form-control rounded-9 w-100 p-2 mb-3" id="certi_end"
                                   name="certi_end" data-mdb-toggle="datepicker" placeholder="Ending Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>
                <input type="file" class="form-control rounded-9 form-control-lg" name="certi_image2"
                       id="certi_image2"
                       accept=".jpg, .jpeg, .png, .pdf"
                       style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">


                <div class="modal-footer d-flex justify-content-end border-top-0">
                    <button type="button" class="btn shadow-0" style="background-color: <?php echo $bgColor; ?>;">
                        CLOSE
                    </button>
                    <button type="button" class="btn " onclick="addCertificate();"
                            style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;"> ADD
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  Delete Certificate-->
<div class="modal top fade" id="deleteCertificate" tabindex="-1" aria-labelledby="deleteCertificateLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>; border: 1px solid <?php echo $color; ?>">
            <div class="modal-header " style=" border : 1px solid <?php echo $color ?> ">
                <h5 class="modal-title" id="deleteCertificateLabel">Delete</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Certificates Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn shadow-0" style="background-color: <?php echo $bgColor; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn " style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">No
                </button>
            </div>
        </div>
    </div>
</div>


<!-- Education modal -->
<div class="modal top fade" id="EducationModal" tabindex="-1" aria-labelledby="EducationModalLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-lg-4 p-2"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">

            <div class="modal-header border-bottom-0 row p-4">
                <img src="img/Group 34.png" class="col-2 img-fluid" style="width: 10vw; opacity: 0.5;"
                     alt="Education Image">
                <p class="modal-title  col-8  " style="font-size: 4vw; color: <?php echo $color; ?>;"
                   id="EducationModalLabel">
                    Education</p>
                <button type="button" class="btn shadow-0 col-2 "
                        style="font-size:1.2rem; color: <?php echo $color; ?>;"
                        data-mdb-dismiss="modal">X
                </button>
            </div>

            <div class="modal-body">
                <div id="myCarousel" class="carousel slide text-center" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- First Item -->
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row flex-row ">

                                    <div class="col-lg-4 col-12 p-3 g-3 ">
                                        <?php
                                        while ($row = mysqli_fetch_assoc($resQuery3)) {
                                            ?>
                                            <div class="card rounded-0 shadow-0"
                                                 style="flex: 0 0 auto; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border:1px solid <?php echo $color; ?> ;">
                                                <div class="card-header rounded-0 d-flex justify-content-between p-3 "
                                                     style="border:1px solid <?php echo $color; ?> ;">
                                                    <i class="fi fi-ss-<?php echo $row['icon'] ?> "
                                                       style="color: <?php echo $color; ?>;"></i>

                                                </div>
                                                <div class="card-body "
                                                     style="border:1px solid <?php echo $color; ?> ;">
                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        <?php echo $row['insti_name'] ?> <br>
                                                        <?php echo $row['Deg-Name'] ?><br>
                                                        <?php echo $row['field_study'] ?><br>
                                                        <?php echo $row['CGPA'] ?><br>
                                                    </p>
                                                </div>
                                                <div class="card-footer rounded-0 text-muted d-flex justify-content-between "
                                                     style="border:1px solid <?php echo $color; ?> ;">  <?php echo $row['start_date'] ?>
                                                    -
                                                    <?php echo $row['end_date'] ?>


                                                    <i class="fi fi-ss-menu-dots-vertical  dropdown me-1"
                                                       id="dropdownMenuButton"
                                                       data-mdb-toggle="dropdown" aria-expanded="false"
                                                       style="color: <?php echo $color; ?>;">

                                                    </i>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                               data-mdb-target="#editEducation" href="#"> <i
                                                                        class="fi fi-ss-pen-clip"></i> Edit </a>
                                                        </li>
                                                        <li><a class="dropdown-item" data-mdb-toggle="modal"
                                                               data-mdb-target="#deleteEducation" href="#"> <i
                                                                        class="fi fi-ss-trash"></i>Delete</a></li>
                                                    </ul>

                                                </div>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="col-lg-4 col-12 p-3 g-4">
                                        <div class="card rounded-0 shadow-0 w-full h-100"
                                             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">

                                            <div class="card-body  d-flex justify-content-center align-items-center"
                                                 style="border:2px dashed <?php echo $color; ?> ;">
                                                <div data-mdb-toggle="modal" data-mdb-target="#addEducation">
                                                    <i class="fi fi-ss-add fa-2x"
                                                       style="color: <?php echo $color; ?>;"></i>
                                                    <p class="card-text " style="color: <?php echo $color; ?>;">
                                                        Add Education
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Additional items go here -->
                    </div>
                    <!-- Navigation Buttons -->
                    <button class="carousel-control-prev" style="margin-left: -8%;" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon " style="color: <?php echo $color; ?>"
                                  aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" style="margin-right: -8%;" type="button"
                            data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon " style="color: <?php echo $color; ?>"
                                  aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  add Education-->
<div class="modal top fade" id="addEducation" tabindex="-1" aria-labelledby="addEducationLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header" style="border : 1px solid <?php echo $color ?>">
                <h5 class="modal-title" id="addEducationLabel">Add Education</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size: 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon5">Please Select any icon</p>
                <p class="error-message" id="messageInstitution4">Enter Institution Name</p>
                <p class="error-message" id="messageDegree">Enter your Degree Name</p>
                <p class="error-message" id="MessageStudyField">Enter Your Study Field</p>
                <p class="error-message" id="MessagePercentage">Enter Your Percentage or CGPA</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="phd" name="icon" value="phd"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-school "></i>
                        </button>
                        <button class="btn btn-floating" id="pg" name="icon" value="post-Graduation"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-building-columns"></i></button>
                        <button class="btn btn-floating" id="Graduation" name="icon" value="Graduation"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-graduation-cap"></i></button>
                        <button class="btn btn-floating" id="clg" name="icon" value="school/college"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-chalkboard-user"></i></button>
                    </div>


                </div>
                <!--  project-title -->
                <input id="Edu_inst" name="Edu_inst" type="text" placeholder="Institution- Ex: Boston University)"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <input id="Edu_deg" name="Edu_deg" type="text" placeholder="Degree: Ex: Bachelor's"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <input id="Edu_FOS" name="Edu_FOS" type="text" placeholder="Field of Study: Ex: Architecture"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       data-listener-added_74bc56c3="true">
                <input id="Edu_CGPA" name="Edu_CGPA" type="text" placeholder="CGPA/Percentage:"
                       aria-placeholder="CGPA/Percentage:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_start" name="Edu_start" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3" data-mdb-toggle="datepicker"
                                   placeholder="Start Date:" aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_end" name="Edu_end" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3"
                                   data-mdb-toggle="datepicker" placeholder="End Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0">
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal">Close</button>
                    <button onclick="addEducation()" type="button"
                            style="box-shadow : 2px 2px 2px 2px <?php echo $color ?>"
                            class="btn">ADD
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  edit Education-->
<div class="modal top fade" id="editEducation" tabindex="-1" aria-labelledby="editEducationLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header" style="border : 1px solid <?php echo $color ?>">
                <h5 class="modal-title" id="editEducationLabel">Edit Education</h5>
                <button type="button" class="btn shadow-0" data-mdb-dismiss="modal"
                        style="color: <?php echo $color; ?>; font-size: 1.2rem;">X
                </button>
            </div>
            <div class="modal-body border-bottom-0"
                 style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;">
                <!-- choose-icon -->

                <p class="error-message" id="messageIcon6">Please Select any icon</p>
                <p class="error-message" id="messageInstitution5">Enter Institution Name</p>
                <p class="error-message" id="messageDegree2">Enter your Degree Name</p>
                <p class="error-message" id="MessageStudyField2">Enter Your Study Field</p>
                <p class="error-message" id="MessagePercentage2">Enter Your Percentage or CGPA</p>


                <div class="row d-flex">
                    <div class="col-12 container m-2">
                        <button class="btn  btn-floating" id="phd" name="icon" value="phd"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i class="fas fa-school "></i>
                        </button>
                        <button class="btn btn-floating" id="pg" name="icon" value="post-Graduation"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-building-columns"></i></button>
                        <button class="btn btn-floating" id="Graduation" name="icon" value="Graduation"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-graduation-cap"></i></button>
                        <button class="btn btn-floating" id="clg" name="icon" value="school/college"
                                onclick="radioCheck(this);"
                                style="background-color: <?php echo $bgColor; ?>; border : 2px solid <?php echo $color ?>;">
                            <i
                                    class="fas fa-chalkboard-user"></i></button>
                    </div>


                </div>
                <!--  project-title -->
                <input id="Edu_inst2" name="Edu_inst" type="text" placeholder="Institution- Ex: Boston University)"
                       aria-placeholder="Institution Name:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <input id="Edu_deg2" name="Edu_deg" type="text" placeholder="Degree: Ex: Bachelor's"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <input id="Edu_FOS2" name="Edu_FOS" type="text" placeholder="Field of Study: Ex: Architecture"
                       aria-placeholder="Education Level:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;"
                       data-listener-added_74bc56c3="true">
                <input id="Edu_CGPA2" name="Edu_CGPA" type="text" placeholder="CGPA/Percentage:"
                       aria-placeholder="CGPA/Percentage:" class="rounded-9 w-100 p-2 mb-3"
                       style="background-color: <?php echo $bgColor; ?>;  outline-style: none; border : 1px solid <?php echo $color ?>; color: <?php echo $color ?>;">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_start" name="Edu_start" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3" data-mdb-toggle="datepicker"
                                   placeholder="Start Date:" aria-placeholder="Starting Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div data-mdb-format="yyyy-mm-dd" class="datepicker datepicker-disable-future"
                             data-mdb-toggle-button="false">
                            <input id="Edu_end" name="Edu_end" type="text"
                                   class="form-control rounded-9 w-100 p-2 mb-3"
                                   data-mdb-toggle="datepicker" placeholder="End Date:"
                                   aria-placeholder="Ending Date:"
                                   style="border: 1px solid <?php echo $color; ?> ;background-color: <?php echo $bgColor; ?>; color: <?php echo $color ?>; ">
                        </div>
                    </div>
                </div>

                <div class="modal-footer border-top-0">
                    <button type="button" class="btn shadow-0" data-mdb-dismiss="modal">Close</button>
                    <button onclick="editEducation();" type="button"
                            style="box-shadow : 2px 2px 2px 2px <?php echo $color ?>"
                            class="btn">UPDATE
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>

<!--  delete Education-->
<div class="modal top fade" id="deleteEducation" tabindex="-1" aria-labelledby="deleteEducationLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content"
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">
            <div class="modal-header " style=" border : 1px solid <?php echo $color ?> ">
                <h5 class="modal-title" id="deleteEducationLabel">Delete</h5>
                <button type="button" class="btn" data-mdb-dismiss="modal" aria-label="Close"> X</button>
            </div>
            <div class="modal-body border-bottom-0">
                <p>
                    This Education Will be Deleted Permanently.
                </p>

            </div>
            <div class="modal-footer border-top-0">
                <button type="button" class="btn shadow-0" style="background-color: <?php echo $bgColor; ?>;"
                        data-mdb-dismiss="modal">
                    yes
                </button>
                <button type="button" class="btn" style="box-shadow: 2px 2px 2px 2px <?php echo $color ?>;">No
                </button>
            </div>
        </div>
    </div>
</div>

<!-- About Modal -->

<div class="modal top fade" id="AboutModal" tabindex="-1" aria-labelledby="AboutModalLabel" aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-lg-4 p-2 "
             style="background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;; border: 1px solid <?php echo $color; ?> ;">

            <div class="modal-header border-bottom-0 row p-4">
                <img src="img/Group 5.png" class="col-2 img-fluid" style="width: 10vw;" alt=" About Section">
                <h3 class="modal-title  col-8"
                    style="color: <?php echo $color; ?>; font-size: 4vw"
                    id="AboutModalLabel">
                    About Me</h3>
                <button type="button" class="btn shadow-0 col-2 " style="font-size:1.5rem;" data-mdb-dismiss="modal"
                        aria-label="Close">X
                </button>
            </div>
            <div class="modal-body">
                <?php
                while ($row = mysqli_fetch_assoc($resQuery5)) {
                    ?>
                    <p style="font-size: 1.5rem; color: <?php echo $color; ?>;">
                        <?php echo $row['description'] ?>
                    </p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio -->

<div class="modal top fade" id="PortfolioModal" tabindex="-1" aria-labelledby="PortfolioModalLabel"
     aria-hidden="true"
     data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-body p-5"
                 style="border: 1px solid <?php echo $color; ?> ; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <!-- images -->
                <div>
                    <img src="https://i1.sndcdn.com/artworks-lNVFu4JIlqP7knsj-jPeF2w-t500x500.jpg"
                         style="height: 12vh ;" alt=""
                         class="mb-3 rounded-circle ">
                </div>
                <!-- name-->
                <h3 style="color: <?php echo $color; ?>;"> Golu Singh</h3>
                <h4 style="color: <?php echo $color; ?>;">Bcs Student & Visual Designer</h4>
                <!-- description -->
                <p style="color: <?php echo $color; ?>;">
                    Hello, I'm Sudhanshu Satapathy. I'm a Visual Designer passionate about creating engaging visuals
                    with
                    innovative ideas through different mediums. My experience and expertise in user interface (UI)
                    design
                    helps
                    me create fluid designs that capture the essence of the brand effectively and help my clients
                    get
                    maximum
                    ROI from their projects.
                </p>
            </div>
            <div style="height: 3vh; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;"></div>
            <div class="modal-footer "
                 style=" border: 1px solid <?php echo $color; ?> ; background-color:<?php echo $bgColor; ?>; color: <?php echo $color; ?>;;">
                <div class=" mx-auto ">
                    <button class="btn " style="color: <?php echo $color; ?>;">View Portfolio</button>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Custom scripts -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/index.js"></script>
<script>
    $(document).ready(function () {
        $('.delete-skill-icon').on('click', function () {
            let skillId = $(this).data('skill-id');
            console.log('Debug: Skill ID - ' + skillId);

            let clickedElement = $(this);

            $.ajax({
                url: 'ajax/delete_skill.php',
                method: 'POST',
                data: {skillId: skillId},
                success: function (response) {
                    console.log(response);
                    if (response.success === true) {
                        clickedElement.closest('li').remove();
                        location.reload();
                    } else {
                        console.error('Failed to delete skill. Error: ' + response.message);
                        location.reload();
                    }
                },
                error: function () {
                    console.error('Error during AJAX request.');
                }
            });
        });
    });
</script>


</body>

</html>
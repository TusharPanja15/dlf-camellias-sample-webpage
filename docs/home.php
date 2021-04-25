<?php

session_start();

$connect = mysqli_connect("localhost", "root", "", "dlfcamellias");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="DLF, Camellias, DLF Camellias, DLF Camellias Gurgaon">
    <meta name="description" content="DLF The Camellias Gurgaon Sector 42 | Ready to Move Project.">
    <meta name="author" content="DLF">
    <meta name='subject' content='DLF The Camellias Gurgaon Sector 42'>
    <meta name='copyright' content='DLF'>
    <meta name="news_keywords" content="DLF, Camellias, DLF Camellias, DLF Camellias Gurgaon">


    <title>DLF Camellias Gurgaon</title>


    <!-- Stylesheets -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
        /* Navigation Bar */
        nav {
            height: 125px !important;
            background-color: #ffffff;
            box-shadow: 0 2px 8px 0 rgba(0, 0, 0, .2);
            margin-bottom: 100px;
        }

        #brand-logo {
            width: 15%;
        }

        .display-4 {
            font-weight: 400;
        }

        #navbarNav {
            float: left !important;
        }



        #background-img {
            background-image: url('img/house.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            height: 500px;
            width: 100%;
        }




        /* Flex Container */
        .flex-container,
        .flex-container2 {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            margin-bottom: -70px;
        }

        .flex-container {
            padding: 0px 220px 0px 220px;
        }

        .flex-container .flex-item-right,
        .flex-container2 .flex-item-right {
            margin: 10px;
            padding: 20px;
            flex: 15%;
        }

        .flex-container2 .flex-item-center {
            margin: 10px;
            padding: 20px;
            flex: 45%;
        }

        .flex-container .flex-item-left,
        .flex-container2 .flex-item-left {
            margin: 10px;
            padding: 20px;
        }

        .flex-container .flex-item-left {
            flex: 15%;
            /* background-color: indianred; */
        }

        .flex-container2 .flex-item-left {
            flex: 1%;
        }

        .flex-container2 button {
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.5);
        }




        /* Horizontal Line Custom Design */
        h2 {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: 20px 0 20px;
            border: 4px solid green;
        }

        h2 span {
            background: #fff;
            padding: 0 20px;
            margin-right: 700px;
        }




        /* Background Shape */
        .shape {
            position: absolute;
            top: 745px;
            left: 180px;
            width: 1300px;
            height: 0px;
            z-index: -1;
            /* background-color: #39cccc;
            clip-path: polygon(0% 100%, 100% 100%, 0% 0%); */
            opacity: 0.5;
            border-bottom: 340px solid rgba(0, 0, 0, 0.103);
            border-left: 80px solid transparent;
            border-right: 400px solid transparent;
        }

        .shape2 {
            position: absolute;
            top: 1535px;
            left: 780px;
            width: 900px;
            height: 600px;
            z-index: -1;
            background-color: rgba(0, 0, 0, 0.164);
            background-size: cover;
            clip-path: polygon(20% 100%, 100% 60%, 0% -60%);
        }




        /* Image Gallary */
        .carousel {
            margin-top: 72px;
            margin-bottom: 100px;
        }

        .carousel-inner img {
            height: 450px;
            width: 100%;
            object-fit: cover;
            opacity: 0.6;
        }

        .carousel-item {
            background: rgba(0, 0, 0, 0.808) !important;
            overflow: hidden !important;
        }




        /* Modals */
        .modal-header h1,
        .modal-header p,
        .modal-body {
            text-align: center;
            color: #c08831;
        }

        .modal-content {
            background-color: black;
            padding: 20px;
        }

        #amenities .card {
            width: 140px;
            height: 140px;
            padding: 10px;
            margin: 20px;
        }

        /* Footer */
        footer {
            display: flex;
            flex-wrap: wrap;
            padding: 0px 255px 50px 255px;
        }

        footer .flex-item-left {
            flex: 50%;
        }

        footer .flex-item-right {
            flex: 20%;
        }

        footer hr {
            margin: -50px 140px 50px 0px;
            border-top: 3px solid #000000;
        }

        footer #img {
            background-image: url('img/DLF-CCAMELLIAS-LOGO.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            height: 100%;
            width: 100%;
        }

        footer a {
            color: rgba(0, 0, 0, 0.808);
        }

        .fa {
            position: relative;
            top: -68px;
            left: 80px;
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-decoration: none;
            margin: 5px 2px;
        }

        .fa-facebook {
            color: #4867aa;
        }

        .fa-youtube {
            color: red;
        }

        .fa-instagram {
            color: #ad3686;
        }



        @media (max-width: 800px) {

            .flex-container,
            .flex-container2 {
                flex-direction: column;
            }

            .flex-container2 {
                margin-top: -250px;
            }

            h2,
            h2 span {
                display: none;
            }

            .shape {
                position: absolute;
                top: 590px;
                left: 10px;
                width: 300px;
                height: 0px;
                opacity: 0.5;
                border-bottom: 620px solid rgba(0, 0, 0, 0.103);
                border-left: 150px solid transparent;
                border-right: 400px solid transparent;
                z-index: -1;
            }
        }
    </style>

</head>

<body>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img id="brand-logo" src="img/logo.jpg" alt=""></a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>


    <!-- Introduction -->
    <div class="flex-container">

        <div class="flex-item-left">

            <p class="display-4">DLF The Camellias</p>
            <p>Dlf Camellias is a most luxurious residential project which offers the smartly designed homes. The Camellias offers the ultre luxury appartments and penthouses. The project is located on the exclusive Golf Drive, within the DLF Golf Course community.</p>


            <!-- Button trigger download modal -->
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Download Brochure</button>

        </div>


        <div class="flex-item-right">
            <div id="background-img"></div>
        </div>

    </div>


    <!-- Horizontal Line -->
    <h2><span>DLF The Camellias</span></h2>
    <div class="shape"></div>


    <!-- About DLF Camellias -->
    <div class="flex-container2">

        <div class="flex-item-left"></div>

        <div class="flex-item-center">

            <p class="display-3">What’s involved?</p>

            <p>DLF The Camellias in Sector-42 Gurgaon, Gurgaon by DLF Builders is a residential project.
                Highlights of project:
                LEED Certified Platinum Rated Building.
                Located just Off Golf Course Road.

                The project offers Apartment with perfect combination of contemporary architecture and features to
                provide
                comfortable
                living.</p>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#amenities">More Info!</button>
        </div>

        <div class="flex-item-right"></div>
    </div>


    <!-- Image Gallary -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="img/dlf-the-camellias-project-project-large-image1.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DLF The Camellias</h5>
                    <p>DLF The Camellias in Sector-42 Gurgaon, by DLF Builders is a residential project.</p>
                    <a href="https://www.magicbricks.com/dlf-camellias-golf-course-road-gurgaon-pdpid-4d4235303430323636">Read more!</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/dlf homes.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Dlf Camellias Sample Flat</h5>
                    <p>Fell the luxury of DLF houses.</p>
                    <a href="https://www.magicbricks.com/dlf-camellias-golf-course-road-gurgaon-pdpid-4d4235303430323636#nav-property-snapshot">Read more!</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="img/dlf at night.jpg">
                <div class="carousel-caption d-none d-md-block">
                    <h5>DLF The Camellias</h5>
                    <p>DLF The Camellias, Sector-42 Gurgaon.</p>
                    <a href="https://www.99acres.com/dlf-the-camellias-sector-42-gurgaon-npxid-r129601">Read more!</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <!-- Modals -->

    <!-- Form to Download Brochure Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <div class="col">
                        <div class="row">
                            <h1 class="modal-title" id="exampleModalLabel">ENQUIRE NOW</h5>
                        </div>
                        <div class="row">
                            <p>Please leave your details here. We will get back to you!</p>
                        </div>
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST">
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" id="inputName" placeholder="John">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" id="inputEmail" placeholder="john@yahoo.com">
                            <small>We'll never share your email with anyone else.</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit" id="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>

                    <span id="error_message" class="text-danger"></span>
                    <span id="success_message" class="text-success"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Download Modal -->
    <div class="modal" id="downloadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <div class="col">
                        <div class="row">
                            <h1 class="modal-title">Your Brochure is ready to download!</h1>
                        </div>
                        <div class="row">
                            <p>Click te below button to start downloading.</p>
                        </div>
                    </div>


                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <button type="button" class="btn btn-outline-warning">
                            <a href="download.php?path=docs/brochure.pdf">Save changes</a>
                        </button>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal" id="error" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col">
                        <div class="row">
                            <p class="modal-title display-6">!! All fields are required !!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Startup Popup Modal -->
    <div class="modal" id="newUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col">
                        <div class="row">
                            <h1 class="modal-title" id="exampleModalLabel">ENQUIRE NOW</h5>
                        </div>
                        <div class="row">
                            <p>Please leave your details here. We will get back to you!</p>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="row g-3" method="POST">
                        <div class="col-12">
                            <label for="inputName" class="form-label">Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="John">
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="userEmail" id="userEmail" class="form-control" placeholder="john@yahoo.com">
                            <small>We'll never share your email with anyone else.</small>
                        </div>
                        <div class="col-md-12">
                            <label for="inputPhone_no" class="form-label">Phone_no</label>
                            <input type="phone_no" name="phone_no" id="phone_no" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submitDetails" id="submitDetails" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Popup Modal -->
    <div class="modal" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Thanks for submitting the form. We'll get back to you soon!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Amenities Popup Modal -->
    <div class="modal" tabindex="-1" id="amenities" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col">
                        <h1 class="modal-title">Amenities</h1>
                    </div>
                </div>
                <div class="modal-body">

                    <div class="col">

                        <div class="row">
                            <div class="card">
                                <img src="img/icons/swimming-pool.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/golf-field.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/elevator.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/policeman.svg">
                            </div>

                        </div>

                        <div class="row">
                            <div class="card">
                                <img src="img/icons/electricity.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/water-supply.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/club.svg">
                            </div>

                            <div class="card">
                                <img src="img/icons/weightlifter.svg">
                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>

        <div class="shape2"></div>

        <div class="flex-item-left">

            <!-- Social Media Icons -->
            <p>Follow us</p>
            <a href="https://www.facebook.com/dlfcamellias/" class="fa fa-facebook"></a>
            <a href="https://www.youtube.com/watch?v=beKPM2glAUk" class="fa fa-youtube"></a>
            <a href="https://www.instagram.com/dlfcamellias/?hl=en" class="fa fa-instagram"></a>


            <!-- Footer Information -->
            <hr>
            <p class="display-5">Looking for more challenges?</p>
            <br><br>
            <p>Kick Start is one of the three competitions that Google holds for participants of all skill levels. Find
                your
                challenge.</p>
            <br>
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://www.dlf.in/"><img id="brand-logo" src="img/1200px-DLF_logo.jpg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Terms</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://www.dlf.in/">About DLF</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://www.camellias.org.in/">About DLF Camellias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Brand Image -->
        <div class="flex-item-right">
            <div id="img"></div>
        </div>

    </footer>



    <!-- JavaScripts -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Custom JavaScripts -->
    <!-- <script type="text/javascript" src="js/script.js"></script> -->

    <script type="text/javascript">
        //Startup popup modal script
        $(window).on('load', function() {
            $('#newUser').modal('show');
        });


        //Inserting user data to get download option
        $(document).ready(function() {
            $('#submit').click(function() {
                var name = $('#name').val();
                var email = $('#email').val();
                if (name == '' || email == '') {
                    $('#error').modal("show");
                } else {
                    $('#error_message').html('');
                    $.ajax({
                        url: "insert.php",
                        method: "POST",
                        data: {
                            name: name,
                            email: email
                        },
                        success: function(data) {
                            $("form").trigger("reset");
                            $('#success_message').fadeIn().html(data);
                            setTimeout(function() {
                                $('#downloadModal').modal("show");
                            }, 2000);
                        }
                    });
                }
            });
        });



        //Inserting user data from startup popup
        $(document).ready(function() {
            $('#submitDetails').click(function() {
                var firstName = $('#firstName').val();
                var userEmail = $('#userEmail').val();
                var phone_no = $('#phone_no').val();
                if (firstName == '' || userEmail == '' || phone_no == '') {
                    $('#newUser').modal("hide");
                    $('#error').modal("show");
                } else {
                    $.ajax({
                        url: "submit.php",
                        method: "POST",
                        data: {
                            firstName: firstName,
                            userEmail: userEmail,
                            phone_no: phone_no
                        },
                        success: function(data) {
                            $("form").trigger("reset");
                            setTimeout(function() {
                                $('#newUser').modal("hide");
                                $('#success').modal("show");
                            }, 2000);
                        }
                    });
                }
            });
        });
    </script>


</body>

</html>
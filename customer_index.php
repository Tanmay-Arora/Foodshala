

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodshala: Order Food Online Now</title>
    <!--Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--FontAwesome CDN Path-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--Primary CSS for Landing Page-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="mainWrapper viewportSet">
        <nav class="navbar fixed-top navbar-light bg-white shadow-nav">
            <ul class="navbar-nav ml-auto mr-1">
                <li class="nav-item mr-4">
                    <a class="nav-link modalBtn" href="#">Login</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link modalBtn" href="#">Sign up</a>
                </li>
            </ul>
        </nav>
        <!--signup Modal-->
        <div class="modal modalBack-dark" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title montserrat" id="exampleModalLabel"><span
                                class="yellowtail">Foodshala</span>&nbsp;&nbsp;Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="cust_signup" name="cust_signup">
                            <div class="form-group">
                                <input type="name" name="name" value="" class="form-control mb-4 regName" id="regName" placeholder="Full Name">
                                <input type="email" name="mail" value=""  class="form-control mb-4 regMail" id="regMail" placeholder="Email">
                                <input type="phone" name="phone" value=""  class="form-control mb-3 regPhone" id="regPhone" placeholder="Phone">
                                <input type="password" name="password" value=""  class="form-control mb-4 regPass" id="regPass" placeholder="Password">
                                <input type="password" name="passAgain" value=""  class="form-control mb-4 passAgain" id="passAgain" placeholder=" Re-Enter Password">
                                <button type="button" onclick="validate_registration()" class="btn btn-primary" style="width: 100%;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <h6 class="montserrat">Already have an account?&nbsp;<a class="shiftModal" href="#">Login</a></h6>
                    </div>
                </div>
            </div>

        </div>
        <!--login Modal-->
        <div class="modal modalBack-dark" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="form">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title montserrat"><span
                                class="yellowtail">Foodshala</span>&nbsp;&nbsp;Customer</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="register.php" method="post" id="cust_login">
                            <div class="form-group">
                                <input type="email" name="log_mail" class="form-control loginMail" id="loginMail" placeholder="Email">
                                <div class="d-flex justify-content-center">
                                    <span class="horizontalSeperator mt-3 mb-3" style="width: 150px;"></span>
                                    <h6 class="montserrat mt-2">&nbsp;&nbsp;or&nbsp;&nbsp;</h6>
                                    <span class="horizontalSeperator mt-3 mb-3" style="width: 150px;"></span>
                                </div>
                                <input type="phone" name="log_phone" class="form-control mb-3 loginPhone" id="loginPhone" placeholder="Phone">
                                <input type="password" name="log_pass" class="form-control mb-4 loginPass" id="loginPass" placeholder="password">
                                <input type="submit" class="btn btn-primary" value="Login"  style="width: 100%;">
                            </div>
                        </form>
                        
                    </div>
                    <div class="modal-footer">
                        <h6 class="montserrat">New to Foodshala?&nbsp;<a class="shiftModal" href="#">Create an account</a></h6>
                    </div>
                </div>
            </div>
        </div>
        <section class="cust_home d-flex align-items-center viewportSet" id="cust_home">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <h1 class="head titilium-web text-white mb-3">Discover the best food & drinks near you</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-2">
                        <div class="search-container">
                            <div class="searchbox">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 d-inline-flex align-items-center">
                                            <div>
                                                <i class="fa fa-map-marker mt-1 ml-2"></i>
                                            </div>
                                            <div>
                                                <form class="form-inline">
                                                    <input type="text" placeholder="Choose a location"
                                                        id="locationSearch" class="form-control no-border ml-1"
                                                        style="width: 185px;">
                                                </form>
                                            </div>
                                            <div>
                                                <i class="fa fa-sort-down mr-3 mb-2"></i>
                                            </div>
                                            <div class="break" id="break"></div>
                                        </div>
                                        <div class="col-5 d-inline-flex align-items-center">
                                            <div>
                                                <form class="form-inline">
                                                    <input type="text"
                                                        placeholder="Search for Restaurant, Cuisine or a Dish"
                                                        id="consumerSearch" class="form-control no-border"
                                                        style="width: 430px;">
                                                </form>
                                            </div>
                                            <div>
                                                <i class="fa fa-search"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--JS for modals-->
    <script src="modal.js"></script>
    <script src="cust_validate.js"></script>
    <!--Bootstrap JS CDN Path-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

</body>

</html>




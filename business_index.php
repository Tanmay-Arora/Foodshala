<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodshala</title>
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
        <div class="landingPage viewportSet">
            <nav id="navbar" class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-nav">
                <a class="navbar-brand montserrat ml-2" href="#"><span class="yellowtail">Foodshala</span>&nbsp;&nbsp;Business</a>
            </nav>
            <div class="viewportSet d-lg-none">
                <div class="home viewportSet d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="#" style="text-decoration: none;" class="text-body mobilBtn" >
                                    <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title headerFont montserrat" style="text-align: center;">Login</h5>
                                          <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="d-flex justify-content-center marginAround">
                                    <span class="horizontalSeperator"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="#" style="text-decoration: none;" class="text-body mobilBtn" >
                                    <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title headerFont montserrat" style="text-align: center;">Sign Up</h5>
                                          <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="viewportSet d-none d-lg-block">
                <div class="home viewportSet d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-4 offset-1 d-flex justify-content-start">
                                <a href="#" style="text-decoration: none;" class="text-body mt-2 modalBtn" >
                                    <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title headerFont montserrat" style="text-align: center;">Login</h5>
                                          <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                <span class="verticalSeperator "></span>
                            </div>
                            <div class="col-4  d-flex justify-content-end">
                                <a href="#" style="text-decoration: none;" class="text-body mt-2 modalBtn" >
                                    <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title headerFont montserrat" style="text-align: center;">Sign Up</h5>
                                          <p class="card-text"></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--SignUp Modal-->
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
                        <form>
                            <div class="form-group">
                                <input type="name" class="form-control mb-4 regName" id="regName" placeholder="Full Name">
                                <input type="email" class="form-control mb-4 regMail" id="regMail" placeholder="Email">
                                <input type="phone" class="form-control mb-3 regPhone" id="regPhone" placeholder="Phone">
                                <input type="password" class="form-control mb-4 regPass" id="regPass" placeholder="Password">
                                <input type="password" class="form-control mb-4 passAgain" id="passAgain" placeholder=" Re-Enter Password">
                                <button type="button" class="btn btn-primary" style="width: 100%;">SIGN UP</button>
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
        <div class="modal viewportSet modalBack-dark" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="loginMailInput" placeholder="Email">
                                <div class="d-flex justify-content-center">
                                    <span class="horizontalSeperator mt-3 mb-3" style="width: 150px;"></span>
                                    <h6 class="montserrat mt-2">&nbsp;&nbsp;or&nbsp;&nbsp;</h6>
                                    <span class="horizontalSeperator mt-3 mb-3" style="width: 150px;"></span>
                                </div>
                                <input type="phone" class="form-control mb-3" id="phoneInput" placeholder="Phone">
                                <input type="password" class="form-control mb-4" id="passInput" placeholder="password">
                                <button type="button" class="btn btn-primary" style="width: 100%;">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <h6 class="montserrat">New to Foodshala?&nbsp;<a class="shiftModal" href="#">Create an account</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--JS for modals-->
<script src="modal.js"></script>
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



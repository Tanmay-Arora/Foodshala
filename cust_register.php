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
                <a class="navbar-brand yellowtail ml-2" href="#">Foodshala</a>
            </nav>
            <div class="home viewportSet d-flex align-items-center">
                <div class="container ">
                    <div class="row">
                        <div class="col-12 mb-3">
                        <h4 class="montserrat">Some Additional Information</h4> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 mt-3">
                        <form action="cust_transit.php" method="POST" id="cust_signup">
                            <div class="form-group">
                                <input type="text" name="cust_addr" class="form-control mb-4 cust_addr" id="Address" placeholder="Address">
                                <input class="form-check-input cust_desc ml-1 mb-3 mt-2" type="checkbox" name="cust_desc" value="" id="cust_desc">
                                <label class="form-check-label ml-4 mb-3" for="cust_desc">
                                    Veg Only
                                </label>
                                <button type="Submit" class="btn btn-primary" style="width: 100%;">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



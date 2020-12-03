<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado - Furniture Ecommerce Template | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <?php include("header.php")?>
        <!-- Header Area Start -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Create Account</h2>
                            </div>
                            <form action="signup_submit.php" method="post" id="form">
                                <div class="row">
                        
                                    <div class="col-12 mb-3">
                                        <input type="text" name="first_name" class="form-control"  id="first_name" value="" placeholder="First Name" required>
                                    </div>

                        
                                    <div class="col-12 mb-3">
                                        <input type="text" name="last_name" class="form-control"  id="last_name" value="" placeholder="Last Name" required>
                                    </div>

                                    <small class="ml-4"  id="email_error"style="color: red;"></small>
                                    <div class="col-12 mb-3">
                                        <input type="email" name="email" class="form-control" id="email" onkeydown="email_validation()" placeholder="Email" required>
                                    </div>
                                    <small class="ml-4"  id="mobile_error"style="color: red;"></small>
                                    <div class="col-12 mb-3">
                                        <input type="text" name="mobile_no" class="form-control" id="phone_number" onkeydown="mobile_validation()" placeholder="Phone No" required>
                                    </div>
                                    
                                    <div class="col-12 mb-3">
                                        <input type="password" name="password1" class="form-control" id="password1" onkeydown="password1_validation()" placeholder="Create password" required>
                                    </div>
                                    <small class="ml-4"  id="password1_error"style="color: red;"></small>
                                    <div class="col-12 mb-3">
                                        <input type="password" name="password2" class="form-control" id="password2" onkeydown="password2_validation()" placeholder="Conform password" required>
                                    </div>
                                    <small class="ml-4"  id="password2_error"style="color: red;"></small>
                                    <div class="col-12 cart-btn mt-10">
                                        <input type="submit" value="Sign up" class="btn amado-btn w-100">
                                    </div> </br>         
                                </div>
                            </form>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->


    <!-- ##### Footer Area Start ##### -->
    <?php include("footer.php")?>
    <!-- ##### Footer Area End ##### -->

    <!-- Form validation -->
    <script src="js/validation.js"></script>
    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'modules/head.php'; ?>
    <title>CS 313 | 03 Prove: Shopping Cart Module (Checkout Page)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!--<link href="css/custom.css" type="text/css" rel="stylesheet" />-->
    <link href="css/checkout.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <header>
        <div id="title">
            <h3>Kimberly Llanos</h3>
            <h1>CS 313:02 Week 03 Prove</h1>
        </div>
        <nav>
            <?php include 'modules/nav.php'; ?>
        </nav>
    </header>

    <body>
        <main>
            <div class="container wrapper">
                <div class="row cart-head">
                    <div class="container">
                        <div class="row">
                            <p></p>
                        </div>
                        <div class="row">
                            <div style="display: table; margin: auto;">
                                <a class="button" href="index-cart.php"> Back to Shopping</a>
                            </div>
                        </div>

                        <div class="row">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row cart-body">
                    <form class="form-horizontal" method="post" action="">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                            <!--SHIPPING METHOD-->
                            <div class="panel panel-info">
                                <div class="panel-heading">Address</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h4>Shipping Address</h4>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Country:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="country" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-xs-12">
                                            <strong>First Name:</strong>
                                            <input type="text" name="first_name" class="form-control" value="" />
                                        </div>
                                        <div class="span1"></div>
                                        <div class="col-md-6 col-xs-12">
                                            <strong>Last Name:</strong>
                                            <input type="text" name="last_name" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Address:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="address" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>City:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="city" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>State:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="state" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Zip / Postal Code:</strong></div>
                                        <div class="col-md-12">
                                            <input type="text" name="zip_code" class="form-control" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Phone Number:</strong></div>
                                        <div class="col-md-12"><input type="text" name="phone_number" class="form-control" value="" /></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12"><strong>Email Address:</strong></div>
                                        <div class="col-md-12"><input type="text" name="email_address" class="form-control" value="" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <a class="button-confirm" href="thankyou.php"> Submit Order</a>
                </div>
            </div>
        </main>
        <footer>
            <?php include 'modules/footer.php';?>
        </footer>
        <!-- JavaScript using jQuery library -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="scripts/scripts.js"></script>
    </body>
</html>

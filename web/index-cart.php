<?php
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
$cartLib = new Cart();
$products = $cartLib->pGet();
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta name="description" content="03 prove shopping cart">
        <title>03 Prove: Shopping Cart Module</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/scripts.js"></script>
        <script src="scripts/general.js"></script>
        <script src="scripts/cart.js"></script>

        <?php include 'modules/head.php'; ?>
    </head>


    <body>
        <main class="products">
            <!-- notification -->
            <div id="noteOut">
                <div id="noteIn"></div>
            </div>

            <!-- move "page-header" out of <header> element
        so that it is displayed below my name -->
            <header id="page-header">
                <!--Shopping Cart-->
                <div id="page-cart" onclick="cart.toggle();">
                    &#128722; <span id="page-cart-count">0</span>
                </div>

                <div id="title">
                    <h3>Kimberly Llanos</h3>
                    <h1>CS 313:02 Week 3 PROVE</h1>
                    <?php echo date('l, F j, Y') ?> 
                </div>

                <nav>
                    <?php include 'modules/nav.php'; ?>
                </nav>

            </header>

            <!-- products -->
            <div id="products">
                <?php
            if (is_array($products)) {
                foreach ($products as $id => $row) {
                    ?>
                    <div class="pdt">
                        <img src="images/<?= $row['product_image'] ?>" />
                        <h3 class="pdtName">
                            <?= $row['product_name'] ?>
                        </h3>
                        <div class="pdtPrice">$
                            <?= $row['product_price'] ?>
                        </div>
                        <div class="pdtDesc">
                            <?= $row['product_description'] ?>
                        </div>
                        <input class="pdtAdd" type="button" value="Add to cart" onclick="cart.add(<?= $row['product_id'] ?>);" />
                    </div>
                    <?php
                }
            } else {
                echo "No products found.";
                //debugging
                print_r[$row]
            }
            ?>
            </div>

            <!-- cart -->
            <div id="cart" class="ninja"></div>


            <footer>
                <?php include 'modules/footer.php'; ?>
            </footer>
                <!-- JavaScript using jQuery library -->
                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
                <script src="scripts/scripts.js"></script>
        </main>
    </body>
</html>

   
<?php
//start session, store credentials [my local MySQL db using PHPAdmin/xampp]
session_start();
try
{
  $dbUrl = getenv('DATABASE');
  $dbOpts = parse_url($dbUrl);
  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>   
    
<?php
//session_start();
//require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";
require PATH_LIB . "lib-db.php";
require PATH_LIB . "lib-cart.php";
$cartLib = new Cart();
$products = $cartLib->pGet();
?> 

    <!DOCTYPE html>
    <html>

    <head>
        <?php include 'modules/head.php';?>
        <meta name="description" content="03 prove assignment: shopping cart page">
        <title>03 Prove: Shopping Cart Module (Products Page)</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="scripts/scripts.js"></script>
        <script src="scripts/general.js"></script>
        <script src="scripts/cart.js"></script>
    </head>


    <body>
        <!-- notification -->
        <div id="noteOut">
            <div id="noteIn"></div>
        </div>

        <!-- move "page-header" out of <header> element
        so that it is displayed below my name -->

        <!--
           <header id="page-header">
            Shopping Cart
            -->

        <header>
            <div id="page-cart" onclick="cart.toggle();">
                &#128722; <span id="page-cart-count">0</span>
            </div>

            <div id="title">
                <h3>Kimberly Llanos</h3>
                <h1>CS 313:02 Week 3 PROVE</h1>
                <p>Shopping Cart Module</p>
            </div>

            <nav>
                <?php include 'modules/nav.php';?>
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
				//for debugging
    			print_r($row);
            }
            ?>
        </div>

        <!-- cart -->
        <div id="cart" class="ninja"></div>


        <footer>
            <?php include 'modules/footer.php';?>
        </footer>
    </body>

    </html>

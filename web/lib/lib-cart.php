<?php
class Cart {
	private $db = null;
	
	function __construct() {
		//parent::__construct();
		$db = new DB();
	}
  /* [PRODUCTS] */
  function pGet () {
  // pGet () : get all products

    $sql = "SELECT * FROM 'products'";
    return $db->fetch($sql, null, "product_id");
  }

  function pAdd ($name, $img, $desc, $price) {
  // pAdd () : add new product

    $sql = "INSERT INTO 'product' ('product_name', 'product_image', 'product_description', 'product_price') VALUES (?, ?, ?, ?)";
    $cond = [$name, $img, $desc, $price];
    return $db->exec($sql, $cond);
  }

  function pEdit ($id, $name, $img, $desc, $price) {
  // pEdit () : update product

    $sql = "UPDATE 'products' SET 'product_name'=?, 'product_image'=?, 'product_description'=?, 'product_price'=? WHERE 'product_id'=?";
    $cond = [$name, $img, $desc, $price, $id];
    return $db->exec($sql, $cond);
  }

  function pDel ($id) {
  // pDel () : delete product

    $sql = "DELETE FROM 'products' WHERE 'product_id'=?";
    $cond = [$id];
    return $db->exec($sql, $cond);
  }

  /* [ORDERS] */
  function oAdd ($name, $email) {
  // oAdd () : create new order
  // ! READS DATA FROM SESSION CART !

    // Init
    $db->start();

    // Create the order
    $sql = "INSERT INTO 'orders' ('order_name', 'order_email') VALUES (?, ?)";
    $cond = [$name, $email];
    $pass = $db->exec($sql, $cond);

    // Insert the items
    if ($pass) {
      $sql = "INSERT INTO 'orders_items' ('order_id', 'product_id', 'quantity') VALUES ";
      $cond = [];
      foreach ($_SESSION['cart'] as $id=>$qty) {
        $sql .= "(?, ?, ?),";
        array_push($cond, $db->lastID, $id, $qty);
      }
      $sql = substr($sql, 0, -1) . ";"; // strip last comma
      $pass = $db->exec($sql, $cond);
    }

    // Finalize
    $db->end($pass);
    return $pass;
	  //for debugging
	 print_r($pass);
  }

  function oGet ($id) {
  // oGet () : get order

    $sql = "SELECT * FROM 'orders' WHERE 'order_id'=?";
    $cond = [$id];
    $order = $db->fetch($sql, $cond);
    $sql = "SELECT * FROM 'orders_items' LEFT JOIN 'products' USING ('product_id') WHERE 'orders_items'.order_id=?";
    $order['items'] = $db->fetch($sql, $cond, "product_id");
    return $order;
	  // for debugging
	  print_r($order);
  }
}
?>
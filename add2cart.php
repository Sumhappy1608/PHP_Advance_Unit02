<?php
session_start();
require_once('products.php');

if(isset($_GET['ID']))
{
	$ID = $_GET['ID'];
}

if(isset($_SESSION['cart'][$ID]))
{
	$_SESSION['cart'][$ID]['AMOUNT']++;
}
else
{
	$product = $products[$ID];
	$product['AMOUNT'] = 1;

	$_SESSION['cart'][$ID] = $product;
}

header("Location: cart.php");
?>
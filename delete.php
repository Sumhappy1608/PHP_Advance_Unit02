<?php
session_start();

if(isset($_GET['ID']))
{
	$ID = $_GET['ID'];
}

if($_SESSION['cart'][$ID]['AMOUNT'] > 1)
{
	$_SESSION['cart'][$ID]['AMOUNT']--;
}
else
{
	unset($_SESSION['cart'][$ID]);
}

header("Location: cart.php");

?>
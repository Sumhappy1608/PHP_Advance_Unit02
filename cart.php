<?php
session_start();
//session_destroy();
$products = $_SESSION['cart'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Giỏ hàng</title>
	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	<div class="container">
	<h3 align="center">---Product List---</h3>
	<a href="index.php" type="button" class="btn btn-primary"><<< Quay lại xem sản phẩm</a>
	<hr>
	    <table class="table">
	    	<thead>
	    		<tr>
	    			<th scope="col">Mã sản phẩm</th>
	    			<th scope="col">Tên sản phẩm</th>
	    			<th scope="col">Giá cả</th>
	    			<th scope="col">Hình ảnh</th>
	    			<th scope="col">Số lượng</th>
	    			<th scope="col">Thành tiền</th>
	    			<th scope="col"></th>
	    		</tr>
	    	</thead>
	    	<tbody>
	    		<?php 
	    		   $total = 0;
	    		   foreach ($products as $product) {
	    			  $total += ($product['AMOUNT']*$product['PRICE']);
	    		?>
	    		<tr>
	    			<td><?= $product['ID']?></td>
	    			<td><?= $product['NAME']?></td>
	    			<td><?= number_format($product['PRICE'])?></td>
	    			<td><img src="<?= $product['IMAGE']; ?>" width="100px" hight="100px"></a></td>
	    			<td>
	    				<a href="add2cart.php?ID=<?= $product['ID']?>" class="btn btn-default">+</a>
	    				<?= $product['AMOUNT']?>
	    				<a href="delete.php?ID=<?= $product['ID']?>" class="btn btn-success">-</a>	
	    			</td>
	    			<td><?= number_format($product['AMOUNT']*$product['PRICE'])?></td>
	    		</tr>
	    	    <?php } ?>
	    	    <thead>
	    	    <tr>
	    			<td colspan="5" align="right"><strong>Tổng tiền</strong></td>
	    			<td><strong><?= number_format($total) ?></strong></td>
	    		</tr>
	    		</thead>
	    	</tbody>
	    </table>
	</div>
</body>
</html>
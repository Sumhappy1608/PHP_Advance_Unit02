<?php 
	require_once('products.php');
	session_start();
	//session_destroy();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách các sản phẩm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2 class="text-center">---PRODUCTS---</h2>
		<div class="container">
			<a href="cart.php" class="btn btn-success">Xem giỏ hàng >>></a>
			<table class="table">
				<thead>
					<tr>
						<th>Mã Sản Phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Giá cả</th>
						<th>Hình ảnh</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($products as $product) { ?>
					<tr>
						<td><?= $product['ID']; ?></td>
						<td><?= $product['NAME']; ?></td>
						<td><?= number_format($product['PRICE']); ?></td>
						<td><img src="<?= $product['IMAGE']; ?>" width="200px" hight="200px"></td>
						<td><a href="add2cart.php?ID=<?= $product['ID'] ?>" class="btn btn-primary">Thêm vào giỏ hàng</a></td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
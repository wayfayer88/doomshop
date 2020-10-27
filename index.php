<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>20_project_catalog</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
   		.gradient {
    		background: linear-gradient(to top, #fefcea, #f1da36);
   			padding: 10px;
    		border: 1px solid #333;
   		}
   		.bg-darkred {
   			background-color: #5c0600;
   		}
  	</style>
</head>
<body style="background-color: black">
	<?php
		$connect = mysqli_connect("127.0.0.1", "root", "root", "20_project");
		$query_select = "SELECT * FROM products";
		$query = mysqli_query($connect, $query_select);
	?>
	<!--Шапка-->
	<div class="col-10 bg-darkred mx-auto border border-danger rounded" style="height: 100px">
		<img src="img/doom-logo.png" style="height: 100px">
		<a href="index.php" class="ml-5 text-light">Каталог</a>
		<a href="forum.php" class="ml-5 text-light">Форум</a>
		<a href="admin.php" class="ml-5 text-light">Добавить товар</a>
	</div>
	<!--Каталог-->
	<div class="col-8 mx-auto mt-1" style="height: 800px">
		<div class="row">
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product1 = $query->fetch_assoc();
					echo "<img src=".$product1['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product1['name']."</h1>";
					echo "<p class='text-break text-light'>".$product1['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product1['price']."</button>";
				?>
			</div>
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product2 = $query->fetch_assoc();
					echo "<img src=".$product2['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product2['name']."</h1>";
					echo "<p class='text-break text-light'>".$product2['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product2['price']."</button>";
				?>
			</div>
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product3 = $query->fetch_assoc();
					echo "<img src=".$product3['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product3['name']."</h1>";
					echo "<p class='text-break text-light'>".$product3['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product3['price']."</button>";
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product4 = $query->fetch_assoc();
					echo "<img src=".$product4['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product4['name']."</h1>";
					echo "<p class='text-break text-light'>".$product4['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product4['price']."</button>";
				?>
			</div>
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product5 = $query->fetch_assoc();
					echo "<img src=".$product5['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product5['name']."</h1>";
					echo "<p class='text-break text-light'>".$product5['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product5['price']."</button>";
				?>
			</div>
			<div class="col-3 bg-darkred mx-auto mt-5 rounded border border-danger" style="">
				<?php
					$product6 = $query->fetch_assoc();
					echo "<img src=".$product6['img']." class='w-100'>";
					echo "<h1 class='font-weight-bold text-light'>".$product6['name']."</h1>";
					echo "<p class='text-break text-light'>".$product6['description']."</p>";
					echo "<button class='btn btn-success'>Купить за ".$product6['price']."</button>";
				?>
			</div>
		</div>
	</div>
</body>
</html>
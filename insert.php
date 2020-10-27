<?php
	$connect = mysqli_connect("127.0.0.1", "root", "root", "20_project");
	$insert = "INSERT INTO products (name, description, price, img) VALUES ('{$_GET['name']}', '{$_GET['description']}', '{$_GET['price']}', '{$_GET['img']}')";
	$insert_query = mysqli_query($connect, $insert);
	header('Location: index.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>20_project_admin</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: black">
	<!--Шапка-->
	<div class="col-10 bg-darkred mx-auto border border-danger rounded" style="height: 100px">
		<img src="img/doom-logo.png" style="height: 100px">
		<a href="index.php" class="ml-5 text-light">Каталог</a>
		<a href="forum.php" class="ml-5 text-light">Форум</a>
		<a href="admin.php" class="ml-5 text-light">Добавить товар</a>
	</div>
	<!--Админ-панель-->
	<div class="col-8 bg-danger mx-auto mt-1">
		<form action="insert.php" method="GET">
			<input type="" name="name" placeholder="Название" class="form-control">
			<input type="" name="description" placeholder="Описание" class="form-control">
			<input type="" name="price" placeholder="Цена" class="form-control">
			<input type="" name="img" placeholder="Картинка" class="form-control">
			<button class="btn btn-success">Добавить</button>
		</form>
	</div>
</body>
</html>
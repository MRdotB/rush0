<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Category</title>
</head>
<body>
<div class="dashboard">
	<main>
		<div class="overview">
			<h1>Dashboard</h1>
			<h2>Overview</h2>
			<div class="widget-container">
			<div class="widget">
			<header>
				<h3 class="iconicfill-bars">Category</h3>
			</header>
			<div class="content">
				<form action="category_controller.php" method="post">
				<label for="name">Old name:</label>
				<input class="hidden" id="name" name="method" value="edit" type="text">
				<input readonly id="oldname" name="old_name" type="text" value="<?php echo $_GET["name"]; ?>"><br>
				<label for="name">New name:</label>
				<input id="newname" name="new_name" type="text">
				<input type="submit" value="Edit">
				</form>
			</div>
			</div>
			</div>
		</div>
		<footer>
		<p>&copy; bchaleil & sbouyahi</p>
		</footer>
	</main>
	<aside>
	<ul>
	<li><a href="?content=orders" class="iconicfill-pin">Orders</a></li>
	<li><a href="?content=products" class="iconicfill-movie">Products</a></li>
	<li><a href="?content=users" class="iconicfill-user">Users</a></li>
	<li><a href="?content=category" class="iconicfill-cloud active">Category</a></li>
	</ul>
	</aside>
	</div>
</body>
</html>


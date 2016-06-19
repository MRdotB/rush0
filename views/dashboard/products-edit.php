<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Products: edit</title>
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
				<h3 class="iconicfill-bars">Products</h3>
			</header>
			<div class="content">
				<form action="product_controller.php" method="post">
				<input class="hidden" id="name" name="method" value="edit" type="text">
				<label for="name">Name:</label>
				<input readonly id="name" name="name" type="text" value="<?php echo $_GET["name"]; ?>"><br>
				<br>
				<label for="price">Price ($):</label>
				<input id="price" name="price" type="number" value="<?php echo $_GET["price"]; ?>"><br>
				<br>
				<label for="name">Img_link:</label>
				<input id="img_link" name="img_link" type="text" value="<?php echo $_GET["img_link"]; ?>"><br>
				<br>
				<fieldset>
					<legend>category</legend>
					<?php 
					include("data/get.php");
					$category = get_category();
					$currcat = explode(";", htmlspecialchars($_GET["category"], ENT_QUOTES, 'UTF-8'));
					$i = 0;
					foreach ($category as $cat) {
						if (in_array($cat["name"], $currcat)) {
							$checked = 'checked';
						} else {
							$checked = '';
						}
						echo '<label><input type="checkbox" name="category[' . $i. ']" value="' . $cat["name"] . '" ' . $checked .'>' . $cat["name"] . '</label><br>';
						$i++;
					}
					?>
				</fieldset>
				<br>
				<input type="submit" value="Creer">
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
	<li><a href="?content=products" class="iconicfill-movie active">Products</a></li>
	<li><a href="?content=users" class="iconicfill-user">Users</a></li>
	<li><a href="?content=category" class="iconicfill-cloud">Category</a></li>
	</ul>
	</aside>
	</div>
</body>
</html>


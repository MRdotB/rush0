<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Products: list</title>
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
				<table>
				  <colgroup span="4"></colgroup>
				  <tr>
					<th>Name</th>
					<th>Price</th>
					<th>Category</th>
					<th>img</th>
				<?php 
					include("data/get.php");
					$products = get_products();
					print_r($products);
					foreach ($products as $product) {
						echo "<tr>";
						echo "<th>" . $product["name"] . "</th>";
						echo "<th>" . $product["price"] . "$</th>";
						echo "<th>" . implode(";", $product["category"]) . "</th>";
						echo "<th><img src=\"" . $product["img_link"] . "\"\\></th>";
						echo "</tr>";
					}
				?>
				</table>
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


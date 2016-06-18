<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Orders</title>
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
				<h3 class="iconicfill-bars">Orders</h3>
			</header>
			<div class="content">
				<table>
				  <colgroup span="4"></colgroup>
				  <tr>
					<th>Login</th>
					<th>Date</th>
					<th>Basket</th>
					<th>Total</th>
				<?php 
					include("data/get.php");
					$orders = get_orders();
					print_r($orders);
					foreach ($orders as $order) {
						echo "<tr>";
						echo "<th>" . $order["user"] . "</th>";
						echo "<th>" . date("d / m / y", $order["timestamp"]) . "</th>";
						echo "<th>" . $order["basket"] . "</th>";
						echo "<th>" . $order["total"] . " $</th>";
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
	<li><a href="?content=orders" class="iconicfill-pin active">Orders</a></li>
	<li><a href="?content=products" class="iconicfill-movie">Products</a></li>
	<li><a href="?content=users" class="iconicfill-user">Users</a></li>
	<li><a href="?content=category" class="iconicfill-cloud">Category</a></li>
	</ul>
	</aside>
	</div>
</body>
</html>


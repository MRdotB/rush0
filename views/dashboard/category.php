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
				<a class="button" href="?content=category-create">Create a category</a>
				<br>
				<table>
				  <colgroup span="4"></colgroup>
				  <tr>
					<th>Name</th>
					<th>Action</th>
					<th>Action</th>
				<?php 
					include("data/get.php");
					$category = get_category();
					print_r($category);
					foreach ($category as $cat) {
						echo "<tr>";
						echo "<th>" . $cat["name"] . "</th>";
						echo "<th><a class=\"button\" href=\"?php" . $cat["name"] . "\">edit</a></th>";
						echo "<th><a class=\"button\" href=\"category_controller.php?method=delete&name=" . $cat["name"] . "\">delete</a></th>";
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
	<li><a href="?content=products" class="iconicfill-movie">Products</a></li>
	<li><a href="?content=users" class="iconicfill-user">Users</a></li>
	<li><a href="?content=category" class="iconicfill-cloud active">Category</a></li>
	</ul>
	</aside>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/dashboard/css.css">
<title>Users</title>
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
				<h3 class="iconicfill-bars">User</h3>
			</header>
			<div class="content">
				<table>
				  <colgroup span="4"></colgroup>
				  <tr>
					<th>Name</th>
					<th>Acl</th>
					<th>action</th>
					<th>action</th>
				<?php 
					include("data/get.php");
					$users = get_users();
					print_r($users);
					foreach ($users as $user) {
						if ($user["acl"] == 0) {
							echo "<tr>";
							echo "<th>" . $user["name"] . "</th>";
							echo "<th>" . $user["acl"] . "</th>";
						echo "<th><a class=\"button\" href=\"?content=users-edit&name=" . $user["name"] . "\">edit</a></th>";
						echo "<th><a class=\"button\" href=\"user_controller.php?method=delete&name=" . $user["name"] . "\">delete</a></th>";
							echo "</tr>";
						}
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
	<li><a href="?content=users" class="iconicfill-user active">Users</a></li>
	<li><a href="?content=category" class="iconicfill-cloud">Category</a></li>
	</ul>
	</aside>
	</div>
</body>
</html>


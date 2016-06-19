<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="views/front/css.css">
<title>Home</title>
</head>
<body>
<div class="dashboard">
	<main>
		<div class="overview">
			<h1>Buy wallpaper !</h1>
			<h2>Filter:</h2>

			<form action="index.php" method="get">
				<input class="hidden" id="name" name="method" value="filter" type="text">
				<?php 
				include("data/get.php");
				$category = get_category();
				$i = 0;
				foreach ($category as $cat) {
					echo '<label><input type="checkbox" name="category[' . $i. ']" value="' . $cat["name"] . '">' . $cat["name"] . '</label>';
					$i++;
				}
				?>
				<input type="submit" value="Filtrer">
			</form>
			<div class="widget-container">
			<?php
				$products = get_products();
				foreach ($products as $product) {
					$display = true;
					if ($_GET["method"] == "filter" && $_GET["category"]) {
						foreach ($_GET["category"] as $cat) {
							if (!in_array($cat, $product["category"])) {
								$display = false;
							}
						}
					}
					if ($display) {
					echo '<div class="widget">';
					echo '<header>';
					echo '<h3>' . $product["name"] . '</h3>';
					echo '<div class="content">';
					echo '<img src="' . $product["img_link"] . '"/>';
					echo '<ul>';
					echo '<li>' . $product["price"]. ' $</li>';
					echo '<li>' . implode(";", $product["category"]). ' </li>';
					echo '<li><a href="order_controller.php?action=add&name=' . $product["name"]  . '">Add to basket</a></li>';
					echo '</ul>';
					echo '</div>';
					echo '</div>';
					}
				}
			?>
		</div>
	</main>
	<aside>
	<ul>
	<?php
	if ($_SESSION["logged"] == true) {
		echo '<li><p>Hello ' . $_SESSION["name"] . ' !</p></li>';
		echo '<li><a href="logout.php">Logout</a></li>';
		if ($_SESSION["acl"] == "1") {
			echo '<li><a href="dashboard.php?content=orders">Dashboard</a></li>';
		}
	} else {
		echo '<li><p>Hello Guest !</p></li>';
		echo '<li><a href="create.php">Register</a></li>';
		echo '<li><a href="login.php">Login</a></li></li>';
	}
	?>
	</ul>
		<ul>

		<h3 class="basket">Basket</h3>
			<?php
				function get_price($item) {
					$products = get_products();
					foreach ($products as $product) {
						if ($product["name"] == $item) {
							return $product["price"];
						}
					}
					return 0;
				}
				$items = explode(";", $_COOKIE["basket"]);
				$total = 0;
				foreach ($items as $item) {
					$total += get_price($item);
				}
				$items = array_count_values($items);
				$i = 0;
				foreach ($items as $key => $value) {
					if ($key != "") {
						echo '<li>' . $value . ' * ' . get_price($key) . ' $ ' . $key . '</li>';
					}
				}
				echo '<li class="total">total: ' . $total . ' $</li>';
				if ($_COOKIE["basket"] != "") {
					echo '<a class="button" href="order_controller.php?action=empty">Empty</a><br>';
				}
				if ($_SESSION["logged"]) {
					echo '<a class="button" href="order_controller.php?action=checkout&total=' . $total . '">Checkout</a>';
				}
			?>
		</ul>
	</ul>
	</aside>
	</div>
<script   src="https://code.jquery.com/jquery-3.0.0.min.js"   integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0="   crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.ui.min.js"></script>
<script>
$('.widget').velocity('transition.expandIn', { stagger: 200});
</script>



</body>
</html>


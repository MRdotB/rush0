<?php
// check login acl and shit
session_start();
if ($_SESSION["acl"] != 1) {
	header("Location: index.php");
}
// Orders
if ($_GET["content"] == "orders") {
	include("views/dashboard/orders.php");
} 

// Products
else if ($_GET["content"] == "products") {
	include("views/dashboard/products.php");
} else if ($_GET["content"] == "products-create") {
	include("views/dashboard/products-create.php");
} else if ($_GET["content"] == "products-edit") {
	include("views/dashboard/products-edit.php");
}

// User
else if ($_GET["content"] == "users") {
	include("views/dashboard/users.php");
} else if ($_GET["content"] == "users-edit") {
	include("views/dashboard/users-edit.php");
} 
// Category
else if ($_GET["content"] == "category") {
	include("views/dashboard/category.php");
} else if ($_GET["content"] == "category-create") {
	include("views/dashboard/category-create.php");
} else if ($_GET["content"] == "category-edit") {
	include("views/dashboard/category-edit.php");
} else {
	//page 404
	echo "404";
}
?>

<?php
var_dump($_GET);
// check login acl and shit
if ($_GET["content"] == "orders") {
	include("views/dashboard/orders.php");
} else if ($_GET["content"] == "products") {
	include("views/dashboard/products.php");
} else if ($_GET["content"] == "users") {
	include("views/dashboard/users.php");
} else if ($_GET["content"] == "category") {
	include("views/dashboard/category.php");
} else if ($_GET["content"] == "category-create") {
	include("views/dashboard/category-create.php");
} else if ($_GET["content"] == "orders-create") {
	include("views/dashboard/orders-create.php");
} else {
	//page 404
	include("views/dashboard/orders-create.php");
}
?>

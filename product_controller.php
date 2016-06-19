<?php
include "data/create.php";
include "data/delete.php";
include "data/edit.php";
// acl
if ($_POST["method"] == "create") {
	create_product($_POST["name"], $_POST["price"], implode(";", array_values($_POST["category"])), $_POST["img_link"]);
	header("Location: dashboard.php?content=products");
} else if ($_POST["method"] == "edit") {
	edit_product($_POST["name"], $_POST["price"], implode(";", array_values($_POST["category"])), $_POST["img_link"]);
	header("Location: dashboard.php?content=products");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	delete_product($_GET["name"]);
	header("Location: dashboard.php?content=products");
} else {
	//page 404
}
?>

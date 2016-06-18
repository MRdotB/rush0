<?php
include "data/create.php";
include "data/delete.php";
if ($_POST["method"] == "create") {
	create_user($_POST["name"]);
	header("Location: dashboard.php?content=category");
} else if ($_POST["method"] == "edit" && $_POST["old_name"] && $_POST["new_name"]) {
	edit_user($_GET["old_name"], $_GET["new_name"]);
	header("Location: dashboard.php?content=category");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
//	print_r($_GET);
	delete_user($_GET["name"]);
	//header("Location: dashboard.php?content=category");
} else {
	//page 404
}
?>

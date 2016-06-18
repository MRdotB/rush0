<?php
include "data/create.php";
if ($_POST["method"] == "create") {
	create_category($_POST["name"]);
	header("Location: dashboard.php?content=category");
} else if ($_POST["method"] == "edit" && $_POST["old_name"] && $_POST["new_name"]) {
	edit_category($_GET["old_name"], $_GET["new_name"]);
	header("Location: dashboard.php?content=category");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	print_r($_GET);
	//delete_category($_GET["name"]);
	//header("Location: dashboard.php?content=category");
} else {
	//page 404
}
?>

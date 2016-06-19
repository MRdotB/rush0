<?php
include "data/create.php";
include "data/delete.php";
include "data/edit.php";

if ($_POST["method"] == "create") {
	create_category($_POST["name"]);
	header("Location: dashboard.php?content=category");
} else if ($_POST["method"] == "edit") {
	edit_category($_POST["old_name"], htmlspecialchars($_POST["new_name"], ENT_QUOTES, 'UTF-8'));
	header("Location: dashboard.php?content=category");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	delete_category(htmlspecialchars($_GET["name"], ENT_QUOTES, 'UTF-8'));
	header("Location: dashboard.php?content=category");
} else {
	//page 404
}
?>

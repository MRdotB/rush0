<?php
include "data/create.php";
include "data/delete.php";
include "data/edit.php";
// acl
if ($_POST["method"] == "create") {
	create_user($_POST["name"]);
	header("Location: dashboard.php?content=users");
} else if ($_POST["method"] == "edit" && $_POST["old_name"] && $_POST["new_name"]) {
	edit_user($_POST["old_name"], $_POST["new_name"]);
	header("Location: dashboard.php?content=users");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	delete_user($_GET["name"]);
	header("Location: dashboard.php?content=users");
} else {
	echo "page 404";
	//page 404
}
?>

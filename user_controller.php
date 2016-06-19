<?php
include "data/create.php";
include "data/delete.php";
include "data/edit.php";
include "data/connect.php";
// acl
session_start();
print_r($_POST);
if ($_POST["method"] == "create") {
	create_user($_POST["name"]);
	header("Location: dashboard.php?content=users");
} else if ($_POST["method"] == "edit" && $_POST["old_name"] && $_POST["new_name"]) {
	edit_user($_POST["old_name"], $_POST["new_name"]);
	header("Location: dashboard.php?content=users");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	delete_user($_GET["name"]);
	header("Location: dashboard.php?content=users");
} else if ($_POST["method"] == "login" && $_POST["name"] && $_POST["password"]) {
	if (connect($_POST["name"], $_POST["password"])) {
		$user = get_user($_POST["name"]);
		$_SESSION["logged"] = true;
		$_SESSION["name"] = $user["name"];
		$_SESSION["acl"] = $user["acl"];
		if ($user["acl"] == 1) {
			header("Location: dashboard.php?content=orders");
		} else {
			header("Location: index.php");
		}
	} else {
		header("Location: login.php");
	}
} else {
	echo "page 404";
	//page 404
}
?>

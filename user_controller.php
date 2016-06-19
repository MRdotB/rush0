<?php
include "data/create.php";
include "data/delete.php";
include "data/edit.php";
include "data/connect.php";
// acl
session_start();
if ($_POST["method"] == "create") {
	create_user($_POST["name"], $_POST["password"], 0);
	header("Location: login.php");
} else if ($_POST["method"] == "edit" && $_POST["old_name"] && $_POST["new_name"] && $_POST["acl"] != "") {

	edit_user($_POST["old_name"], $_POST["new_name"], $_POST["acl"]);
	header("Location: dashboard.php?content=users");
} else if ($_GET["method"] == "delete" && $_GET["name"]) {
	delete_user(htmlspecialchars($_GET["name"], ENT_QUOTES, 'UTF-8'));
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
	header("Location: dashboard.php?content=users");
}
?>

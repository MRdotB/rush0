<?php
session_start();
include "data/create.php";

if ($_GET['action'] == "add" && $_GET["name"]) {
	if ($_COOKIE["basket"] != "") {
		$items = explode(";", $_COOKIE["basket"]);
		array_push($items, $_GET["name"]);
		setcookie("basket", implode(";", $items), time() + 3600);
	} else {
		setcookie("basket", $_GET["name"],  time() + 3600);
	}
	header("Location: index.php");
} else if ($_GET['action'] == "empty") {
	setcookie("basket", "",  time() + 3600);
	header("Location: index.php");
} else if ($_GET['action'] == "checkout" && $_GET["total"] != "") {
	create_order($_SESSION["name"], $_COOKIE["basket"], $_GET["total"]);
	setcookie("basket", "",  time() + 3600);
	header("Location: index.php");
}


?>

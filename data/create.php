<?php
include "get.php";

function create_user($name, $pass, $acl) {
	if (!$name || !$pass || !isset($acl)) {
		echo "user";
		return ;
	}
	$new_user = array();
	$new_user["name"] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$new_user["pass"] = hash('whirlpool', $pass);
	$new_user["acl"] = htmlspecialchars($acl, ENT_QUOTES, 'UTF-8');
	$users = get_users();
	foreach ($users as $user) {
		if ($user["name"] == $new_user["name"]) {
			return ;
		}
	}
	array_push($users, $new_user);
	file_put_contents("data/users", serialize($users));
}

function create_product($name, $price, $category, $img_link) {
	if (!$name || !$price || !$category || !$img_link) {
		return ;
	}
	$new_product = array();
	$new_product["name"] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$new_product["price"] = htmlspecialchars($price, ENT_QUOTES, 'UTF-8');
	$new_product["category"] = explode(";", htmlspecialchars($category, ENT_QUOTES, 'UTF-8'));
	$new_product["img_link"] = htmlspecialchars($img_link, ENT_QUOTES, 'UTF-8');
	$products = get_products();
	foreach ($products as $product) {
		if ($product["name"] == $new_product["name"]) {
			return ;
		}
	}
	array_push($products, $new_product);
	file_put_contents("data/products", serialize($products));
}

function create_order($user, $basket, $total) {
	if (!$user || !$basket || !$total) {
		return ;
	}
	$new_order = array();
	$new_order["user"] = $user;
	$new_order["timestamp"] = time();
	$new_order["basket"] = $basket;
	$new_order["total"] = $total;
	$orders = get_orders();
	array_push($orders, $new_order);
	file_put_contents("data/orders", serialize($orders));
}

function create_category($name) {
	if (!$name) {
		return ;
	}
	$new_cat = array();
	$new_cat["name"] = $name;
	$category = get_category();
	foreach ($category as $cat) {
		if ($cat["name"] == $name) {
			return ;
		}
	}
	array_push($category, $new_cat);
	file_put_contents("data/category", serialize($category));
}
?>

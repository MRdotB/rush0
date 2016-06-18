<?php
function get_data($path) {
	if (!file_exists($path)) {
		return array();
	} else {
		$data = file_get_contents($path);
		return unserialize($data);
	}
}

function get_users() {
	if (!file_exists("data/users")) {
		return array();
	} else {
		$users = file_get_contents("data/users");
		return unserialize($users);
	}
}

function get_products() {
	if (!file_exists("data/products")) {
		return array();
	} else {
		$products = file_get_contents("data/products");
		return unserialize($products);
	}
}

function get_orders() {
	if (!file_exists("data/orders")) {
		return array();
	} else {
		$orders = file_get_contents("data/orders");
		return unserialize($orders);
	}
}

function get_category() {
	if (!file_exists("data/category")) {
		return array();
	} else {
		$category = file_get_contents("data/category");
		return unserialize($category);
	}
}
?>

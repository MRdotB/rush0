<?php

function delete_user($name) {
	$users = get_users();
	print_r($users);
	for ($i = 0; $i < count($users); $i++) {
		if ($users[$i]["name"] == $name) {
			array_splice($users, $i, $i);
		}
	}
	file_put_contents("data/users", serialize($users));
}

function delete_product($name) {
	$products = get_products();
	for ($i = 0; $i < count($products); $i++) {
		if ($products[$i]["name"] == $name) {
			array_splice($products, $i, $i);
		}
	}
	file_put_contents("data/products", serialize($products));

}

function delete_category($name) {
	$category = get_category();
	$products = get_products();
	for ($i = 0; $i < count($category); $i++) {
		if ($category[$i]["name"] == $name) {
			array_splice($category, $i, $i);
			for ($j = 0; $j < count($products); $j++) {
				for ($k = 0; $k < count($products); $k++) {
					
				}
				if ($product["category"]
			}
		}
	}
	file_put_contents("data/users", serialize($users));
}
?>

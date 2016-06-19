<?php

function edit_user($name, $new_name) {
	$users = get_users();
	for ($i = 0; $i < count($users); $i++) {
		if ($users[$i]["name"] == $name) {
			$users[$i]["name"] = $new_name;
		}
	}
	file_put_contents("data/users", serialize($users));
}

function edit_product($name, $price, $category, $img_link) {
	if ($name == "" || $price == "" || $category == "" || $img_link == "") {
		return ;
	}
	$new_product = array();
	$new_product["name"] = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$new_product["price"] = htmlspecialchars($price, ENT_QUOTES, 'UTF-8');
	$new_product["category"] = explode(";", htmlspecialchars($category, ENT_QUOTES, 'UTF-8'));
	$new_product["img_link"] = htmlspecialchars($img_link, ENT_QUOTES, 'UTF-8');
	$products = get_products();

	for ($i = 0; $i < count($products); $i++) {
		if ($products[$i]["name"] == $name) {
			$products[$i] = $new_product;
		}
	}
	file_put_contents("data/products", serialize($products));
}

function edit_category($name, $new_name) {
	$category = get_category();
	$products = get_products();
	$new_name = htmlspecialchars($new_name, ENT_QUOTES, 'UTF-8');

	foreach ($category as $cat) {
		if ($cat["name"] == $new_name) {
			return ;
		}
	}
	for ($i = 0; $i < count($category); $i++) {
		if ($category[$i]["name"] == $name) {
			$category[$i]["name"] = $new_name;
			for ($j = 0; $j < count($products); $j++) {
				for ($k = 0; $k < count($products[$j]["category"]); $k++) {
					if ($products[$j]["category"][$k] == $name) {
						$products[$j]["category"][$k] = $new_name;
					}
				}
			}
		}
	}
	file_put_contents("data/products", serialize($products));
	file_put_contents("data/category", serialize($category));
}
?>

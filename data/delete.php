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
			unset($products[$i]);
		}
	}
	$products = array_values($products);
	file_put_contents("data/products", serialize($products));

}

function delete_category($name) {
	$category = get_category();
	$products = get_products();

	for ($i = 0; $i < count($category); $i++) {
		if ($category[$i]["name"] == $name) {
			unset($category[$i]);
			for ($j = 0; $j < count($products); $j++) {
				for ($k = 0; $k < count($products[$j]["category"]); $k++) {
					if ($products[$j]["category"][$k] == $name) {
						unset($products[$j]["category"][$k]);
					}
					$products[$j]["category"] = array_values($products[$j]["category"]);
				}
			}
		}
	}
	$category = array_values($category);;
	file_put_contents("data/products", serialize($products));
	file_put_contents("data/category", serialize($category));
}
?>

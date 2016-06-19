<?php

function connect($login, $password) {
	if (!$login || !$password) {
		return ;
	}
	$users = get_users();
	$hash = hash('whirlpool', $password);
	foreach ($users as $user) {
		if ($user["name"] == $login) {
			return ($user["pass"] == $hash);
		}
	}
	return false;
}

function get_user($login) {
	$users = get_users();
	foreach ($users as $user) {
		if ($user["name"] == $login) {
			return ($user);
		}
	}
}
?>

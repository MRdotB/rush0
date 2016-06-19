<?php 
include("data/create.php");

create_category("cat1");
create_category("cat2");
create_category("cat3");
create_user("root", "root", 1);
create_user("user1", "user1", 0);
create_user("user2", "user2", 0);
create_user("user3", "user3", 0);
create_user("user4", "user4", 0);
create_product("serie1", 333, "cat1;cat2", "http://lorempixel.com/400/200");
create_product("serie2", 333, "cat1", "http://lorempixel.com/400/200");
create_product("serie3", 333, "cat3", "http://lorempixel.com/400/200");
create_order("user1", "serie1, serie2, serie3", 999);
create_order("user2", "serie1", 888);
print_r(get_users());
print_r(get_products());
print_r(get_orders());

?>

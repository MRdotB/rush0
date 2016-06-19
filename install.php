<?php 
include("data/create.php");

create_category("abstract");
create_category("nature");
create_category("city");
create_category("liked");
create_user("root", "root", 1);
create_user("user1", "user1", 0);
create_user("user2", "user2", 0);
create_user("user3", "user3", 0);
create_user("user4", "user4", 0);
create_product("psychedelic1", 25, "abstract;liked", "http://lorempixel.com/400/200/abstract/1");
create_product("psychedelic2", 10, "abstract", "http://lorempixel.com/400/200/abstract/3");
create_product("psychedelic3", 10, "abstract", "http://lorempixel.com/400/200/abstract/5");
create_product("sunset", 15, "nature", "http://lorempixel.com/400/200/nature/2");
create_product("sea", 30, "nature;liked", "http://lorempixel.com/400/200/nature/3");
create_product("city by night", 16, "city", "http://lorempixel.com/400/200/city/2");
create_product("vegas by day", 13, "city", "http://lorempixel.com/400/200/city/3");
create_product("manhattan", 33, "city;liked", "http://lorempixel.com/400/200/city/5");

?>

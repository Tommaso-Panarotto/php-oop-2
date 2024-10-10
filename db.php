<?php
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Foods.php";
require_once __DIR__ . "/classes/Kennels.php";
require_once __DIR__ . "/classes/Toys.php";

$dog = new Category("dog");
$cat = new Category("cat");

$products = [];

$kong = new Toys($dog, "kong", 20, "https://m.media-amazon.com/images/I/61VAFKv2bJL.jpg", "plastic", "teaching");
$products["Toys"] = $kong;
$carrier = new Kennels($dog, "trixie", 70, "https://m.media-amazon.com/images/I/81JjkSuwZEL._AC_UF350,350_QL80_.jpg", "steel", "grey");
$products["Kennels"] = $carrier;
$croquettes = new Foods($cat, "purina", 20, "https://media.zooplus.com/bilder/4/800/1_1_mhi_9_4.jpg", "solid", "28/08/2028");
$products["Foods"] = $croquettes;

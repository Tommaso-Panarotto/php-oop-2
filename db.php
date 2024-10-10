<?php
require_once __DIR__ . "/classes/Category.php";
require_once __DIR__ . "/classes/Foods.php";
require_once __DIR__ . "/classes/Kennels.php";
require_once __DIR__ . "/classes/Toys.php";

$dog = new Category("dog");
$cat = new Category("cat");

$kong = new Toys($dog, "kong", 20.00, "kong.image", "plastic", "teaching");

var_dump($kong);

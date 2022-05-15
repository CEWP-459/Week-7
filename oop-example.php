<?php 

ini_set('display_errors', 1); 

require './item.php';

$item1 = new Item("Item #1", "First Item!");
var_dump($item1 -> name);
var_dump($item1 -> sayHello()); 
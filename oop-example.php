<?php 

require './item.php';

$item1 = new Item();
$item1 -> name = "Item 1";
$item1 -> price = 32.99;
var_dump($item1);

$item2 = new Item();
$item2 -> name = "Item 2";
$item2 -> description = "Hi, I am Item 2!";
var_dump($item2);

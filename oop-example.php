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

$item3 = new Item();
var_dump($item3 -> sayHello());
var_dump($item3 -> getName());
$item3 -> name = "Item 3";
var_dump($item3 -> getName());
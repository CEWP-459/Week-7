<?php 

ini_set('display_errors', 1); 

require './item.php';

$item1 = new Item("Example", "Some Description!");

var_dump($item1);

$item2 = new Item("Example", "Some Description!");

var_dump($item2);

Item::showCount();
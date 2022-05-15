<?php 

ini_set('display_errors', 1); 

require './item.php';

var_dump(Item::$count);

$item1 = new Item("Example", "Some Description!");

var_dump($item1);

var_dump(Item::$count);

$item2 = new Item("Example", "Some Description!");

var_dump($item2);

var_dump(Item::$count);

<?php 

ini_set('display_errors', 1); 

require './Item.php';
require './Book.php';

// $item1 = new Item();
// echo $item1 -> code; does not work

// $book1 = new Book();
// echo $book1 -> code; does not work

$book1 = new Book();
echo $book1 -> getCode(); //works

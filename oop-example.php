<?php 

ini_set('display_errors', 1); 

require './Item.php';
require './Book.php';

$item1 = new Item();
$item1 -> description = "Some Description of Item 1"; 
echo $item1 -> getListingDescription() . "<br>";

$book1 = new Book();
$book1 -> description = "Some Description of Book 1"; 
$book1 -> author = "Becca Fitzpatrick"; 
echo $book1 -> getListingDescription() . "<br>";

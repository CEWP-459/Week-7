<?php 

ini_set('display_errors', 1); 

require './item.php';

define('MAXIMUM', 100);

define('COLOUR', 'red');

echo MAXIMUM . "<br>";
echo COLOUR . "<br>";

echo Item::MAX_LENGTH;
<?php 

class Item {

    public $name;
    public $description = "This is a default description!";

    function __construct () {
        echo "In the constructor!";
    }

    function sayHello () {
        return "Hello";
    }

    function getName () {
        return $this -> name;
    }

}


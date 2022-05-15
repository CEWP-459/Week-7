<?php 

class Item {

    public $name;
    public $description = "This is a default description!";

    function sayHello () {
        return "Hello";
    }

    function getName () {
        return $this -> name;
    }

}


<?php 

class Item {

    public $name;
    public $description = "This is a default description!";

    function __construct ($name, $description) {
       $this -> name = $name;
       $this -> description = $description;
    }

    function sayHello () {
        return "Hello";
    }

    function getName () {
        return $this -> name;
    }

}


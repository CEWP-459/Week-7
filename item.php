<?php 

class Item {

    private $name;
    public $description = "This is a default description!";

    function __construct ($name, $description) {
       $this -> name = $name;
       $this -> description = $description;
    }

    private function sayHello () {
        return "Hello";
    }

    function getName () {
        return $this -> name;
    }

}


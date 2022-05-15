<?php

class Item
{
    private $name;

    private $description;

    public static $count = 0;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;

        static::$count++;
    }

}

<?php

class Item
{
    private $name;

    private $description;

    public static $count = 0;

    public const MAX_LENGTH = 24;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;

        static::$count++;
    }

    public static function showCount () {
        echo static::$count;
    }


}

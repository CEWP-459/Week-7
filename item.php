<?php

class Item
{
    public $name;

    public $description;

    protected $code = 1234;

    public function getListingDescription()
    {
        return "Description: " . $this->description;
    }

}

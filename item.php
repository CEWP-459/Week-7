<?php

class Item
{
    public $name;

    public $description;

    public function getListingDescription()
    {
        return $this->description;
    }

}

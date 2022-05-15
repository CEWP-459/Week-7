<?php

class Book extends Item
{
    public $author;

    public function getListingDescription()
    {
        return $this->description . " by " . $this->author;
    }

}

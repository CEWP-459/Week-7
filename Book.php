<?php

class Book
{
    public $name;

    public $description;

    public $author;

    public function getListingDescription()
    {
        return $this->description;
    }

}

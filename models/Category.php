<?php

class Category{
    public $name;
    public $description;
    public $image;

    function __construct(String $name, String  $description, String  $image){
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
    }
}

<?php

include_once __DIR__ . '/Product.php';


class Food extends Product {
    public $calories;
    public $fats;

    function __construct(String $name,String $description,Float $price, String $image, Bool $inStock, Category $category, Int $quantity, Int $calories, Int $fats){
        parent::__construct($name, $description, $price, $image, $inStock, $category, $quantity);
        $this->calories = $calories;
        $this->fats = $fats;
    }

}
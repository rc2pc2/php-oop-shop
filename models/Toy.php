<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/traits/AgeGroup.php';


class Toy extends Product {
    use AgeGroup;
    public $size;
    public $material;

    function __construct(String $name,String $description,Float $price, String $image, Bool $inStock, Category $category, Int $quantity, Int $shelfNo,String $laneNo, String $size, String $material, Int $minAge, Int $maxAge){
        parent::__construct($name, $description, $price, $image, $inStock, $category, $quantity, $shelfNo, $laneNo);
        $this->size = $size;
        $this->material = $material;
        $this->minAge = $minAge;
        $this->maxAge = $maxAge;
    }
}
<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/traits/AgeGroup.php';

class Food extends Product {
    use AgeGroup;

    protected $calories;
    protected $fats;

    function __construct(String $name,String $description,Float $price, String $image, Bool $inStock, Category $category, Int $quantity, Int $shelfNo, String $laneNo, Int $calories, Int $fats, Int $minAge, Int $maxAge){
        parent::__construct($name, $description, $price, $image, $inStock, $category, $quantity, $shelfNo, $laneNo);
        $this->setCalories($calories);
        $this->setFats($fats);
        $this->minAge = $minAge;
        $this->maxAge = $maxAge;
    }

    public function getCalories() : Int {
        return $this->calories;
    }

    public function getFats() : Int {
        return $this->fats;
    }

    protected function setCalories(Int $calories) : void {
        if ($calories < 0){
            $calories = 0;
        }

        $this->calories = $calories;
    }

    public function setFats(Int $fats) : void {
        $this->fats = $fats;
    }
}
<?php

include_once __DIR__ . '/Product.php';


class Food extends Product {
    protected $calories;
    protected $fats;

    function __construct(String $name,String $description,Float $price, String $image, Bool $inStock, Category $category, Int $quantity, Int $calories, Int $fats){
        parent::__construct($name, $description, $price, $image, $inStock, $category, $quantity);
        $this->setCalories($calories);
        $this->setFats($fats);
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
        $this->calories = $fats;
    }
}
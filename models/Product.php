<?php
include_once __DIR__ . '/Category.php';
include_once __DIR__ . '/traits/WarehousePos.php';

class Product{
    use WarehousePos;

    public $name;
    public $description;
    public $price;
    public $image;
    public $inStock;
    public $category;
    public $quantity;

    function __construct(String $name,String $description,Float $price, String $image, Bool $inStock, Category $category, Int $quantity, Int $laneNo, String $shelfNo){
        if ($name === ''){
            throw new InvalidArgumentException('Product\'s name must be populated, empty given', 9987);
        }
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->inStock = $inStock;
        $this->category = $category;
        $this->quantity = $quantity;
        $this->laneNo = $laneNo;
        $this->shelfNo = $shelfNo;
    }

    public function getInfo(){
        return "Product $this->name with price $this->price$";
    }
}
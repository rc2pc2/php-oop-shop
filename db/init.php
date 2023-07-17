<?php

include_once __DIR__ . '/../models/Category.php';
include_once __DIR__ . '/../models/Product.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Toy.php';

$sportItems = new Category('Sport Items', 'Items that allow or facilitate sport activities', '');
$catItems = new Category('Cat Items', 'Items for cats', '');
$dogItems = new Category('Dog Items', 'Items for dogs', '');

$paddleProduct = new Product('Paddleboard', 'Paddleboard che Simona vuole comprare per andare al mare quando e\' piatto', 205.50, 'https://irockersup.com/cdn/shop/products/10_NAUTICALTEALGRAY_2021_1200x.png?v=1685362674', true, $sportItems, 5);

$woolBall = new Toy('Wool ball', 'Ball of  wool for small cats', 12.99, 'https://media.istockphoto.com/id/1263674144/photo/red-ball-with-woolen-threads-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=L7UnV596Hi5HMzG4XjXfIhDC4SyxO_KUsA1Iegetf_0=' , true, $catItems, 13, 'Small', 'wool');
$biscuits = new Food('Big Dog Biscuits', 'Biscuits for the biggest and proudest dogs!', 33.33, 'https://www.nutrixpiu.it/wp-content/uploads/2018/08/adulti-taglia-grande-nutrix-piu-2kg-crocchette.png
', true, $dogItems, 30, 350, 8);


$products = [
    $paddleProduct,
    $woolBall,
    $biscuits
];

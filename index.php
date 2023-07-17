<?php
    include_once __DIR__ . '/models/Category.php';
    include_once __DIR__ . '/models/Product.php';
    include_once __DIR__ . '/models/Food.php';
    include_once __DIR__ . '/models/Toy.php';
    include_once __DIR__ . '/db/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    Shop
                </h1>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php foreach ($products as $product) {?>
                <div class="card col-3 m-4 p-0">
                    <img src="<?php echo $product->image; ?>" class="product-image" alt="<?php echo $product->name; ?>">
                    <div class="card-body flex-column">
                        <h5 class="card-title">
                            <?php echo $product->name; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">
                            <?php echo $product->category->name; ?>
                        </h6>

                        <?php
                            if (get_class($product) === 'Food'){
                        ?>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Calories : <?php echo $product->getCalories(); ?>
                                <br>
                                Fats : <?php echo $product->getFats(); ?>
                            </h6>
                        <?php } elseif (get_class($product) === 'Toy'){
                        ?>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Calories : <?php echo $product->material; ?>
                                <br>
                                Fats : <?php echo $product->size; ?>
                            </h6>
                        <?php } ?>


                        <p class="card-text">
                            <?php echo $product->description; ?>
                        </p>




                        <p class="card-text">
                            <?php echo $product->description; ?>
                        </p>


                        <a href="#" class="btn btn-primary">Buy for just <?php echo $product->price ?>$</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
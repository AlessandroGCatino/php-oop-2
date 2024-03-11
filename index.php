<?php

    include_once __DIR__ . '/models/Product.php';
    include_once __DIR__ . '/models/CatProduct.php';
    include_once __DIR__ . '/models/DogProduct.php';

    $item1 = new DogProduct( 'Collare con campanello', 'https://picsum.photos/id/500/200', 24.99, "Accessorio" );

    $item2 = new DogProduct( 'Corda a doppio intreccio', 'https://picsum.photos/id/400/200', 5.49 , "Giochi" );

    $item3 = new CatProduct( 'Umido Salmone 500kg', 'https://picsum.photos/id/200/200', 8.99, "Cibo" );
    

    $arrayProdotti = [
        $item1,
        $item2,
        $item3
    ];

    try {
        
        $item1->setDiscount(100, "%");

    } catch (Exception $e) {

        echo $e->getMessage();

    }


    // echo "<pre>";
    // var_dump($arrayProdotti);
    // echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2 - Animals Supplies</title>
    <!-- import fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- import bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous' />
</head>

<body>

    <h1 class="text-center">
        Lista Prodotti
    </h1>

    <main class="container">
        <div class="row">
            <?php foreach( $arrayProdotti as $element ): ?>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <figure>
                            <img src="<?= $element->getImage()?>" alt="" class="w-100">
                            <div>
                                <?= $element->getIcon()?>
                            </div>
                        </figure>
                        <h4 class="card-title">
                            <?= $element->getName() ?>
                        </h4>
                        <small class="card-text <?=($element->getDiscount() > 0) ? "text-decoration-line-through" : "" ?>">
                            Prezzo: €<?= 
                            $element->getPrice();?>
                        </small>
                        <?php if ($element->getDiscount() > 0) : ?>
                        <small class="text-danger"> 
                            -<?=$element->getDiscount()?>
                        </small>
                        <?php endif ?>
                        <hr>
                        <small>
                            Categoria: <?= $element->getCategory() ?>
                        </small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

    <style>
        figure{
            position: relative;
        }

        i{
            background-color: lightgoldenrodyellow;
            border-radius: 50%;
            padding: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
        }

    </style>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js' integrity='sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==' crossorigin='anonymous'></script>
</body>

</html>
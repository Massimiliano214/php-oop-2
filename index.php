<?php 

    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Breed.php';
    require_once __DIR__ . '/Models/Kennel.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Game.php';
    require_once __DIR__ . '/Traits/Weightable.php';

    $dog = new Breed('Cane');
    $cat = new Breed('Gatto');


    $food = new Food('Croccantini', '13,50 $', './images/croccantini.jpg', $dog, '300 calorie');
    $food->setWeight(3);
    $catNip = new Game('Cat Nip', '5,00 $', './images/catnip.jpg', $cat, 'Droga');
    $game = new Game('Gioco', '10,00 $', './images/gioco_gatto.jpg', $cat, 'Intrattenimento');
    $leash = new Kennel('Guinzaglio', '20,00 $', './images/leash.jpg', $dog, 'Utilità');
    $leash->setWeight(0.2);
    $kennel = new Kennel('Cuccia', '50,00 $', './images/cucciaCani.jpg', $dog , 'Utilità');
    $kennel->setWeight(21);

    $productsList = [
        $food,  $catNip, $game, $leash, $kennel
    ];
//  var_dump($food);
//  var_dump($catNip);
//  var_dump($game);
//  var_dump($leash);
//  var_dump($kennels);
//  var_dump($productsList);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="bg-success-subtle">
    <main>
        <h1 class="text-center py-5">Pet Shop</h1>
        <div class="container py-5 d-flex p-2 justify-content-between flex-wrap">
            
            <?php foreach($productsList as $product) {
                
              echo '<div class="card my-5" style="width: 30rem;">
                        <img src="' . $product->img . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">' . $product->item . '</h5>
                            <span class="card-text"> Razza: '
                            ?>
                            <?php if ($product->breed == $dog) {
                               echo 'per Cani' ?>
                            <?php
                            } else {
                                echo 'per Gatti'
                            ?>
                            <?php
                            }    
                             '</span>

                            '
                            ?>
                            <?php

                                if (isset($product->weight)) {

                                    echo '<p> Peso spedizione: ' . $product->weight . ' Kg </p>
                                    <br>';
                                    try {
                                        echo $product->checkNull($product->weight);
                                    } catch (Exception $e) {
                                        echo '<p> Si è verificato un errore: ' . $e->getMessage() . '</p>';
                                    }
                                    echo '<br>';
                                    ?>
                                    <?php
                                }
                            ?>
                            <?php
                                if (isset($product->calories)) {
                                    
                                    echo '<p> Peso: ' . $product->calories . '</p>
                                    <br>'
                                    ?>
                                    <?php
                                }
                            ?>
                            <?php
                                if (isset($product->type)) {
                                
                                    echo '<p> Tipo: ' . $product->type . '</p>
                                    <br>'
                                    ?>
                                    <?php
                                }
                            ?>
                            <?php
                                if (isset($product->genre)) {
                            
                                    echo '<p> Genere: ' . $product->genre . '</p>
                                    <br>'
                                    ?>
                                    <?php
                                }
                            ?>
                            <?php
                                
                                echo '<span class="card-text"> Prezzo: ' . $product->price . '</span>
                                <br>
                                <a href="#" class="btn btn-primary my-5">Acquista</a>
                            </div>
                        </div>';
                    }
                
                ?>
        </div>

    </main>
</body>
</html>
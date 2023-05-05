<?php 

    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Dog.php';
    require_once __DIR__ . '/Models/Cat.php';

    $productsList = [
        $food = new Dog('Croccantini', '13,50 $', 'cibo', '300 calorie', './images/croccantini.jpg'),
        $catNip = new Cat('Cat Nip', '5,00 $', 'droga', 'intrattenimento', './images/catnip.jpg'),
        $game = new Cat('Gioco', '10,00 $', 'giocattolo', 'intrattenimento', './images/gioco_gatto.jpg'),
        $leash = new Dog('Guinzaglio', '20,00 $', 'utilità', 'neccessità', './images/leash.jpg'),
        $kennels = new Dog('Cuccia', '50,00 $', 'utilità', 'neccessità', './images/cucciaCani.jpg')
    ]
//  var_dump($food);
//  var_dump($catNip);
//  var_dump($game);
//  var_dump($leash);
//  var_dump($kennels);
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
<body>
    <main>
        <h1 class="text-center py-5">Pet Shop</h1>
        <div class="container py-5 d-flex p-2 justify-content-between flex-wrap">
            
            <?php foreach($productsList as $product) {
                
              echo '<div class="card my-5" style="width: 30rem;">
                        <img src="' . $product . '" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>';
                }
            
            ?>
        </div>

    </main>
</body>
</html>
<?php 

    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Dog.php';
    require_once __DIR__ . '/Models/Cat.php';

    $food = new Dog('Croccantini', '13,50 $', 'cibo', '300 calorie');

    var_dump($food);

    $catNip = new Cat('Cat Nip', '5,00 $', 'droga', 'intrattenimento');

    var_dump($catNip);

    $game = new Cat('Gioco', '10,00 $', 'giocattolo', 'intrattenimento');

    var_dump($game);

    $leash = new Dog('Guinzaglio', '20,00 $', 'utilità', 'neccessità');

    var_dump($leash);

    $kennels = new Dog('Cuccia', '50,00 $', 'utilità', 'neccessità');

    var_dump($kennels);
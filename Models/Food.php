<?php

    require_once __DIR__ . '/../Traits/Weightable.php';

    class Food extends Product{

        use Weightable;
        public $calories;

        public function __construct($item, $price, $img, Breed $breed, $calories)
        {
            parent::__construct($item, $price, $img, $breed);

            $this->calories = $calories;
            
        }

    }
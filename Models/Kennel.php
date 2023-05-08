<?php

    require_once __DIR__ . '/../Traits/Weightable.php';

    class Kennel extends Product{

        use Weightable;
        
        public function __construct($item, $price, $img, Breed $breed, $type, $weight)
        {
            parent::__construct($item, $price, $img, $breed, $weight);


            $this->type = $type;
        }
    }
<?php

    class Product {
        public $item;
        public $price;
        public $type;
        public $genre;
        public $img;
        public $breed;

        public function __construct($item, $price, $img, Breed $breed)
        {
            $this->item = $item;
            $this->price = $price;
            
            $this->img = $img;
            $this->breed = $breed;
        }
    }


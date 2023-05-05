<?php

    class Product {
        public $item;
        public $price;
        public $type;
        public $genre;
        public $img;
        public $breed;

        public function __construct($item, $price, $type, $genre, $img, Breed $breed)
        {
            $this->item = $item;
            $this->price = $price;
            $this->type = $type;
            $this->genre = $genre;
            $this->img = $img;
            $this->breed = $breed;
        }
    }


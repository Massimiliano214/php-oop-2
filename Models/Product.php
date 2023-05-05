<?php

    class Product {
        public $item;
        public $price;
        public $type;
        public $genre;

        public function __construct($item, $price, $type, $genre)
        {
            $this->item = $item;
            $this->price = $price;
            $this->type = $type;
            $this->genre = $genre;
        }
    }


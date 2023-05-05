<?php
    class Food extends Product{
        
        public function __construct($item, $price, $type, $genre, $img, Breed $breed)
        {
            parent::__construct($item, $price, $type, $genre, $img, $breed);
        }
    }
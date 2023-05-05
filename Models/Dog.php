<?php
    class Dog extends Product{
        
        public function __construct($item, $price, $type, $genre, $img)
        {
            parent::__construct($item, $price, $type, $genre, $img);
        }
    }
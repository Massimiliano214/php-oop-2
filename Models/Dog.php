<?php
    class Dog extends Product{
        
        public function __construct($item, $price, $type, $genre)
        {
            parent::__construct($item, $price, $type, $genre);
        }
    }
<?php
    class Food extends Product{
        public $calories;

        public function __construct($item, $price, $type, $genre, $img, Breed $breed, $calories)
        {
            parent::__construct($item, $price, $type, $genre, $img, $breed);

            $this->calories = $calories;
        }
    }
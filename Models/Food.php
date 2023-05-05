<?php
    class Food extends Product{
        public $calories;

        public function __construct($item, $price, $img, Breed $breed, $calories)
        {
            parent::__construct($item, $price, $img, $breed);

            $this->calories = $calories;
        }
    }
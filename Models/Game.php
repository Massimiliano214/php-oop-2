<?php

    class Game extends Product{

        public function __construct($item, $price, $type, $genre, $img, Breed $breed)
        {
            parent::__construct($item, $price, $type, $genre, $img, $breed);
        }
            
    }
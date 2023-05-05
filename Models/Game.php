<?php

    class Game extends Product{

        public function __construct($item, $price, $img, Breed $breed, $genre)
        {
            parent::__construct($item, $price, $img, $breed);

            $this->genre = $genre;
        }
            
    }
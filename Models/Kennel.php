<?php
    class Kennel extends Product{
        
        public function __construct($item, $price, $img, Breed $breed,  $type)
        {
            parent::__construct($item, $price, $img, $breed);

            $this->type = $type;
        }
    }
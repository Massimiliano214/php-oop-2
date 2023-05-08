<?php

    trait Weightable {
        public $weight;

        public function __construct($weight)
        {
            $this->weigth = $weight;
        }
    }
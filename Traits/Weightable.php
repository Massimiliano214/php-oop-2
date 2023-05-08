<?php

    trait Weightable {
        public $weight;

        public function setWeight($weight) {
            $this->weight = $weight;
        }
    
        public function getWeight() {
            return $this->weight;
        }

        public function checkNull($weight) {
            if ($weight < 1) {
                throw new Exception('Il peso di spedizione mostrato potrebbe essere incorretto');
            } 

        }
    }
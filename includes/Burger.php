<?php
        class Burger {
            public $burgerType;
            public $pickles;
            public $tomato;
            public $onion;
            public $lettuce;
            public $mayo;
            public $mustard;
            public $cheese;
            public $bacon;
            public $guacamole;
            public $subtotal;
            
            public function __construct($burgerType, $pickles, $tomato, $onion, $lettuce, $mayo, $mustard, $cheese, $bacon, $guacamole, $subtotal){
                
                $this->burgerType = $burgerType;
                $this->pickles= $pickles;
                $this->tomato = $tomato;
                $this->onion = $onion;
                $this->lettuce = $lettuce;
                $this->mayo = $mayo;
                $this->mustard = $mustard;
                $this->cheese = $cheese;
                $this->bacon = $bacon;
                $this->guacamole = $guacamole;
                $this->subtotal = $subtotal;
            }
        }
    
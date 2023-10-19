<?php

    class Car
    {
        public $color = 'red';
        private $numberOfTires = 4;
        public static $country = "Canada";
        public function __construct($color)
        {
                $this->color = $color;
        }

        public function __destruct()
        {
            echo "Objeto será destruído";
        }

        public function setColor($var)
        {
                $this->color = $var;
        }

        public function getColor()
        {
                return $this->color;
        }
    }


    $bmw = new Car("white");
    echo $bmw->color;
    echo $bmw->getColor();
    $bmw->setColor("black");
    echo $bmw->getColor();
    echo Car::$country;
?>    

<?php 
    class Car
    {
        private $color;
        private $pride;
        private $owner;
	
        public function setCar($color, $pride, $owner)
        {
              $this->color = $color;
              $this->pride = $pride;
                $this->owner = $owner;
        }
        public function getCar()
        {
    return $color;
    return $pride;
    return $owner;
        }
    }
    $car = new Car();
    $car-> setCar('yellow', 50000, 'me');
    print_r($car);

<?php

// Class
class Car {

    // Property
    public $color;
    public $model;

    // contructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    //Method
    public function run() {
        return "The car is running";
    }
}

// Object
$myCar = new Car("black", "Volvo");

echo "My car is a " . $myCar->color . " " . $myCar->model . ".<br>";
echo $myCar->run();

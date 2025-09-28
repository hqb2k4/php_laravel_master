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
        $this->run();
    }

    //Method
    public function run() {
        echo "The car is running" . "My car is a " . $this->color . " " . $this->model . ".<br>";
    }
}

// Object
$myCar = new Car("black", "Volvo");


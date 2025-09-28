<?php

// Class
class Car {

    // Property
    public $color;
    public $model;

    //Method
    public function run() {
        return "The car is running";
    }
}

// Object
$myCar = new Car();

// Set property values
$myCar->color = "black";    
$myCar->model = "Volvo";

echo "My car is a " . $myCar->color . " " . $myCar->model . ".<br>";
echo $myCar->run();
<?php
/* 
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource
*/

// ****Primitive Types*********

/*
    A string is a sequence of characters
    A string can be any text inside quotes. You can use single or double quotes
*/

$varString = "Hello world!";

var_dump("Data Type of varString:" . $varString);
echo "<br>";

// *********Interger*********

/*
    An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
    Rules for integers:
        - An integer must have at least one digit
        - An integer must not have a decimal point
        - An integer can be either positive or negative
        - Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
*/

$varInteger = 5985;
var_dump($varInteger);
echo "<br>";

// *********Float*********

/*
    A float (floating point number) is a number with a decimal point or a number in exponential form.
*/

$varFloat = 10.365;
var_dump($varFloat);
echo "<br>";

// *********Boolean*********

/*
    A boolean represents two possible states: TRUE or FALSE
    Booleans are often used in conditional testing.
*/

$varBoolean = true;
var_dump($varBoolean);
echo "<br>";

// ********Non-Primitive Types/Reference Types*********

// *********Array*********

/*
    An array stores multiple values in one single variable.
*/ 
$varArray = array("Volvo", "BMW", "Toyota");
var_dump($varArray);
echo "<br>";

// *********Object*********

/*
    Classes and objects are the two main aspects of object-oriented programming.
    A class is a template for objects, and an object is an instance of a class.
    When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
*/

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    } 
}

$myCar = new Car("black", "Volvo");
echo $myCar->message();
echo "<br>";

// *********NULL*********

/*
    NULL is a special data type which can have only one value: NULL.
    A variable of data type NULL is a variable that has no value assigned to it.
    NULL is not the same as an empty string or a zero value. 
*/
$str = "";
$num = 0;
$arr = [];
var_dump(isset($str)); 
var_dump(empty($num)); 
var_dump(empty($arr)); 
echo "<br>";



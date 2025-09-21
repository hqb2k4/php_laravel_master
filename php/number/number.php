<?php

/*
There are three main numeric types in PHP:

    Integer
    Float
    Number Strings
In addition, PHP has two more data types used for numbers:

    Infinity
    NaN

*/

// An integer is a number without any decimal part: 2, 256, -256, 10358, -179567 are all integers.
$x = 5985;
var_dump(is_int($x));

// A float is a number with a decimal point or a number in exponential form: 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
$x = 10.365;
var_dump(is_float($x));

/*
    The PHP is_finite() function checks whether a value is finite or not.

    A value is finite if it is within the allowed range for a PHP float on this platform.

    The PHP is_infinite() function checks whether a value is infinite or not.

    The value is infinite if it is outside the allowed range for a PHP float on this platform.
*/
$x = 1.9e411;
var_dump(is_infinite($x));

/* 
    NaN stands for Not a Number.

    NaN is used for impossible mathematical operations.

    The PHP is_nan() function is used to check if a value is not a number.
*/
$x = acos(8);
var_dump($x);



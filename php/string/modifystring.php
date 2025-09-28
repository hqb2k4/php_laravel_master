<?php

// The PHP strtoupper() function returns a string in upper case.

$varUpper = "Hello World!";
echo strtoupper($varUpper . "<br>"); 

// The PHP strtolower() function returns a string in lower case.
$varLower = "Hello World!";
echo strtolower($varLower . "<br>");

// The PHP str_replace() function replaces some characters with some other characters in a string.
$varReplace = "Hello World!";
echo str_replace("World", "Bao", $varReplace . "<br>");

// The PHP strrev() function reverses a string.
$varRev = "Hello World!";
echo strrev($varRev). "<br>";

// The PHP trim() function removes any whitespace from the beginning or the end.
$varTrim = " Hello World! ";
echo trim($varTrim). "<br>";

// Convert String into Array. The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
$varExplode = "Hello World!";
print_r (explode(" ", $varExplode)). "<br>";
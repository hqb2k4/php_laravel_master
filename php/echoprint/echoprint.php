<?php 
/*Both echo and print are used to output data to the screen.

The differences are small:

echo has no return value, while print has a return value of 1 so it can be used in expressions
echo can take multiple parameters, while print can take one argument
echo is marginally faster than print */

// The echo statement can be used with or without parentheses: echo or echo().
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
//same as:
echo("Hello <br>");

// how to output text and variables with the echo statement:
$var = "world";
echo "Hello $var <br>";

// When using single quotes, variables have to be inserted using the . operator, like this:
echo 'Hello ' . $var . '<br>';


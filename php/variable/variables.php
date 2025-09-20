<?php
// Variable with global scope:
$x = 5; // global scope
echo "Global X = " . $x;

// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
function testLocalScope()
{
    $y = 10; // local scope
    echo "Local Y = " . $y;
}
testLocalScope();
//echo $y; //  This will cause an error because $y is not defined in this scope

// The global keyword is used to access a global variable from within a function.
function testGlobalScope()
{
    global $x;
    echo "Global X = " . $x;
}
testGlobalScope();

// PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
function testGlobalScopeWithGlobals()
{
    $GLOBALS['x'] = 15;
}
testGlobalScopeWithGlobals();
echo "Updated Global X = " . $x;

// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
function myTest()
{
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();


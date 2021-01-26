<?php
# FUNCTION - Block of code that can be repeatedly called

/*
    Camel Case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
    
    You will mostly see camel case or lower case 
    Pascal case used for Classes & OOP
*/

//Create Simple Function
function simpleFunction()
{
    echo 'Hello World';
    echo '<br>';
}

//Run Simple Function
simpleFunction();

// Function with param
// Specify default value for if param is missing
function sayHello($name = 'World')
{
    echo "Hello $name<br>";
    echo '<br>';
}

sayHello('Joe');

function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

echo addNumbers(2, 3);
echo '<br>';

// By Reference 
$myNum = 10;
function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);
echo "value: $myNum<br>";
// Calling this here will not affect $myNum

addTen($myNum);
echo "value: $myNum<br>";
// Calling this here will affect $myNum since it's referenced in the function

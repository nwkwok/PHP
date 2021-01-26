<?php
#ARRAY - Variable that holds multiple values
/* 
        - Indexed
        - Associative
        - Multi-Dimensional
    */

//////// Indexed ////////
$people = array('Kevin', 'Jeremy', 'Sara');
echo $people[1];
// return Jeremy
echo '<br>';

$ids = array(23, 55, 12);
echo $ids[2];
// return 12
echo '<br>';

$cars = ['Honda', 'Toyota', 'Ford'];
$cars[3] = 'Chevy';
// Pushes Chevy into index 3

$cars[] = 'BMW';
// This will add to last index

echo $cars[1];
// returns Toyota
echo '<br>';

echo count($cars);
// returns number of items in array
echo '<br>';

print_r($cars);
// Prints the array
echo '<br>';

var_dump($cars);
// Returns all variables and values inside of the array
echo '<br>';

//////// Associative ////////
$people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];
echo $people['Brad'];
//Returns 35
echo '<br>';

$people['Jill'] = 42;
echo $people['Jill'];
echo '<br>';
print_r($people);
echo '<br>';
var_dump($people);
echo '<br>';

//////// Multi-Dimensional ////////
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);
echo $cars[1][2];
// Returns 20
<?php
// single line comment
# single line comment
/* 
    Multi-line
    Comment 
    */

#VARIABLES
/*
        - Prefix $
            - No $ means it gets defined as a constant
        - Start with a letter or an underscore
        - Only letters, numbers and underscores
        - Case sensitive
    */

#DATATYPES
/* 
        String
        Intergers 
        Floats
        Booleans
        Arrays
        Objects
        Null
        Resource
    */

$output = 'Hello world!';

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$float1 = 4.4;
$bool1 = true;

echo $output;

#CONCAT with . 
$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 . ' ' . $string2;
echo $greeting;

#String Interpolation uses double quotes ""
$greeting2 = "$string1 $string2";
echo $greeting2;

#ESCAPE SEQUENCES uses '\' if you're using single quotes
$string3 = 'They\'re Here';
echo $string3;

#CONSTANTS 
define('GREETING', 'Hello Everyone');
echo GREETING;

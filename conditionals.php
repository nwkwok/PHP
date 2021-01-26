<?php
# CONDITIONALS

/* 
    ==     // matchs value
    ===    // matches value & datatype
    <
    >
    <=
    >=
    !=
    !==
*/

/*
    LOGICAL OPERATORS

    AND     &&
    OR      || 
    XOR     --> One of them has to be true but not both
*/

# SWITCH
$favColor = 'red';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is something else';
        break;
};

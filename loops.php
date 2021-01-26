<?php
# LOOPS - execute code set number of times

/*
        For
        While
        Do..While
        Foreach
    */

# For Loops
# @params - init, condition, inc
for ($i = 0; $i < 10; $i++) {
    echo 'number ' . $i;
    echo '<br>';
}

# While Loop
# @params - condition

$i = 0;
while ($i < 10) {
    echo $i;
    echo '<br>';
    $i++;
}

# Do..While
# Difference is that this will always run at least once
# More often not used
# @params - condition
$i = 0;
do {
    echo $i;
    echo '<br>';
    $i++;
} while ($i < 10);

# Foreach
$people = array('Brad', 'Jose', 'William');

foreach ($people as $person) {
    echo $person;
    echo '<br>';
}

$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

foreach ($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
}

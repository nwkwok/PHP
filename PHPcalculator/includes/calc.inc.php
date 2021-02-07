<?php

declare(strict_types=1);
include 'class-autoload.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['oper'];

$calc = new Calc($operator, (int)$num1, (int)$num2);
# because we have type_declarations, we can cast the specified data_types in the parameters.

try {
    echo $calc->calculate();
} catch (TypeError $e) {
    echo "Error: " . $e->getMessage();
}

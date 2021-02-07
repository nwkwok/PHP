<?php

declare(strict_types=1);
include 'includes/class-autoload.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>

<body>
    <form action="includes/calc.inc.php" method="POST">
        <p>My own calculator!</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>
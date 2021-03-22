<?php

// difference between htmlentities and htmlspecialchars
// htmlspecialchars will encode '<>&' wherewas htmlentities will encode all symbols and special characters.


if (isset($_POST['submit'])) {
    session_start(); // Starts the session

    // Create Session Variables
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    // Redirect to a new page
    header('Location: page2.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Sessions</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>

</body>

</html>
<?php
// prepend htmlspecialchars
// filter_has_var($variable, flag type) 
// Difference between filter_has_var and isset
// filter_has_var will look at the current request that's being made
// So in this example, if you have filter_has_var(INPUT_POST, 'submit'), it will look through all of the input values
// for the request that is submitted
// isset will look through the entire $_POST array. 

if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $msg = "Please fill out all of the information";
        $msgClass = 'form-invalid';
        echo $msg;
    }

    if (filter_var($name, FILTER_VALIDATE_EMAIL) == false) {
        echo "<br>";
        $msg = "Please put in a valid email address";
        $msgClass = 'form-invalid';
        echo $msg;
    } else {
        $toEmail = "nwkwok@gmail.com";
        $body = '<h2>Contact Request</h2>
        <h4>Name</h4><p>' . $name . '</p>
        <h4>Email</h4><p>' . $email . '</p>
        <h4>Name</h4><p>' . $message . '</p>';

        // Email Headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Context-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional Headers
        $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
            $msg = 'Your email has been sent!';
            $msgClass = 'alert-success';
        } else {
            $msg = 'Your email has failed';
            $msgClass = 'alert-failed';
        }
    }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validate</title>
</head>

<body>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Name</label>
        <input autocomplete="off" name="name" id="name">
        <br>
        <label>Email</label>
        <input autocomplete="false" name="email" id="email">
        <br>
        <label>Subject</label>
        <input name="subject" id="subject">
        <br>
        <label>Message</label>
        <textarea name="message" id="message">
        </textarea>
        <br>
        <input type="submit" name="submit" value="Submit Form">

    </form>


</body>

</html>
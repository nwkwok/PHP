<?php

/*
// $_GET will send http requests through the headers. These will show up as query parameters in your URL

if (isset($_GET['name'])) {
    // When working with get and post data it's important to protect your site from XSS attacks:
    // Cross Site Scripts (XSS) can be when someone inserts a <script> {hamrful code} </script> inside of form fields and submits them to insert damaging code to your site.

    // If this gets run before html entities, XSS attack could be successful 
    print_r($_GET);

    // One way to prevent this is using htmlentities(). Turns html brackets into entities that make them harmless. 
    $name = htmlentities($_GET['name']);
    echo $name;
}

// $_POST if you want to send requests without headers, you would want to use at $_POST request. 
if (isset($_POST['name'])) {
    print_r($_POST);
    $name = htmlentities($_POST['name']);
    echo $name;
}

// $_REQUEST is another super global but generally, you want to stick with $_GET and $_POST. This is not commonly used.
if (isset($REQUEST['name'])) {
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
}

*/

// This will return query string params
echo $_SERVER['QUERY_STRING'];

?>


<!DOCTYPE html>
<html>

<head>
    <title>GET & POST</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <!-- <form method="GET" action="get_post.php"> -->
    <form method='GET' action="get_post.php">
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>



    <script src="" async defer></script>
</body>

</html>
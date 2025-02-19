<?php

// SELECT 
// FROM 
// JOIN 
// ON
// WHERE 
// GROUP BY 
// HAVING 

require('config/config.php');
require('config/db.php');

// Check for submit
if (isset($_POST['submit'])) {
    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    // Create Query
    $query = "INSERT INTO posts(title, body, author) values ('$title', '$body', '$author')";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}
?>

<?php include('inc/header.php') ?>
<div class="container">
    <h1 class="mt-4 mb-4">Add Post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Post">

    </form>
</div>
<?php include('inc/footer.php') ?>
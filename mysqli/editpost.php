<?php
require('config/config.php');
require('config/db.php');

// Check for submit
if (isset($_POST['submit'])) {
    // Get form data
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    // Create Query
    $query = "UPDATE posts SET title='$title', author='$author', body='$body' WHERE id = $update_id";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . ROOT_URL . '');
    } else {
        echo 'ERROR: ' . mysqli_error($conn);
    }
}

// get ID 
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create Query 
$query = 'SELECT * FROM posts WHERE id= ' . $id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);


?>

<?php include('inc/header.php') ?>
<div class="container">
    <h1 class="mt-4 mb-4">Edit Post</h1>
    <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
        </div>
        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author'] ?>">
        </div>
        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body'] ?></textarea>
        </div>
        <input class="btn btn-primary" type="submit" name="submit" value="Post">
        <input type="hidden" name="update_id" value="<?php echo $post['id'] ?>">
    </form>
</div>
<?php include('inc/footer.php') ?>
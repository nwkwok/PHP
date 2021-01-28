<?php
require('config/config.php');
require('config/db.php');

// Create Query
$query = 'SELECT * FROM posts ORDER by created_at DESC';

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

?>


<?php include('inc/header.php') ?>
<div class="container">
    <h1 class="mt-4 mb-4">Posts</h1>
    <?php foreach ($posts as $post) : ?>
        <div class="pl-5 container well bg-light mb-4">
            <h2 class='pt-2'>
                <?php echo $post['title']; ?>
            </h2>
            <small>
                Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
            </small>
            <p><?php echo $post['body'] ?></p>
            <a href="posts.php?id=<?php echo $post['id'] ?>" class="btn btn-info mb-3">Read More</a>
        </div>
    <?php endforeach ?>
</div>
<?php include('inc/footer.php') ?>
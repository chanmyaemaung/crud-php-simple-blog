<?php

require('./config/config.php');
require('./config/db.php');


// Check Form
if (isset($_POST['delete'])) {
    // Get from data
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    // Insert into DB
    $query = "DELETE FROM posts WHERE id = {$delete_id}";

    if (mysqli_query($conn, $query)) {
        // If Success redirect to Home Page
        header('Location: ' . ROOT_URL . '');
    } else {
        // If isn't show error status
        echo 'ERROR: ' . mysqli_error($conn);
    }
}


// Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);


// Create Query
$query = 'SELECT * FROM posts WHERE id = ' . $id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch Data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);

?>

<!-- Header -->
<?php include('./inc/header.php'); ?>

<div class="container">
    <h1 class="text-warning">PHP BLOG</h1>


    <div class="card text-center mb-3 border border-dark shadow p-3 mb-5 bg-white rounded">
        <div class="card-header ">
            <?php echo $post['title'] ?>
        </div>
        <div class="card-body bg-gradient-warning">
            <p class="card-text text-justify"> <?php echo $post['body'] ?>
            </p>
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer text-muted">
            <footer class="blockquote-footer">
                Author by: <cite title="Author by"><?php echo $post['author'] ?></cite>
            </footer>
            <small class="text-primary">Created at:&nbsp;<?php echo $post['created_at']; ?></small>
        </div>
        <a href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>" class="my-1 btn btn-info">Edit</a>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="pull-right" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="delete" value="Delete" class="my-1 btn btn-danger btn-block">
        </form>
    </div>


</div>

<!-- Footer -->
<?php include('./inc/footer.php'); ?>
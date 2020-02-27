<?php

require('./config/config.php');
require('./config/db.php');

// Check Form
if (isset($_POST['submit'])) {
    // Get from data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    // Insert into DB
    $query = "INSERT INTO posts(title, author, body) VALUES ('$title', '$author', '$body')";

    if (mysqli_query($conn, $query)) {
        // If Success redirect to Home Page
        header('Location: ' . ROOT_URL . '');
    } else {
        // If isn't show error status
        echo 'ERROR: ' . mysqli_error($conn);
    }
}


?>

<!-- Header -->
<?php include('./inc/header.php'); ?>

<div class="container">
    <h1 class="text-warning text-center">ADD POST</h1>
    <div class="card shadow p-3 mb-5 bg-white rounded">
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
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</div>

<!-- Footer -->
<?php include('./inc/footer.php'); ?>
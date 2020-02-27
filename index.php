<?php

require('./config/config.php');
require('./config/db.php');

// Create Query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

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

<!-- Header -->
<?php include('./inc/header.php'); ?>

<!-- Blog Post -->
<?php include('./inc/blog.php'); ?>

<!-- Footer -->
<?php include('./inc/footer.php'); ?>
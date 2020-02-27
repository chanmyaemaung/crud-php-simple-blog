<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BLOG</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="<?php echo ROOT_URL; ?>" class="navbar-brand">PHP | BLOG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="addPost.php">ADD POST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://blog.bootswatch.com">POST</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
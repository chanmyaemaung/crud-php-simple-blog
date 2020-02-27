<div class="container">
    <h1 class="text-warning">PHP BLOG</h1>

    <?php foreach ($posts as $post) : ?>
        <div class="card text-center mb-3 border border-light shadow p-3 mb-5 bg-white rounded">
            <div class="card-header ">
                <?php echo $post['title'] ?>
            </div>
            <div class="card-body bg-gradient-warning">
                <p class="card-text text-justify"> <?php echo $post['body'] ?>
                </p>
                <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">View More</a>
            </div>
            <div class="card-footer text-muted">
                <footer class="blockquote-footer">
                    Author by: <cite title="Author by"><strong><?php echo $post['author'] ?></strong></cite>
                </footer>
                <small class="text-primary">Created at:&nbsp;<?php echo $post['created_at']; ?></small>
            </div>
        </div>
    <?php endforeach; ?>
</div>
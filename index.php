
    <?php require_once 'config.php' ?>
    <?php require_once 'includes/public_functions.php' ?>
    <?php require_once 'includes/head_section.php' ?>
    <title>LifeBlog | Home </title>
</head>

<body>
    <!-- container - wraps whole page -->
    <!-- navbar -->
    <?php require_once 'includes/header.php' ?>
    <!-- // navbar -->

    <!-- Page content -->
    <div class="container">
        <div class="content">
            <?php require_once 'includes/banner.php';   ?>
            <h2 class="content-title">Recent Articles</h2>
            <hr>
            <?php
            $posts = getPubleshedPosts();

            foreach ($posts as $post) : ?>
                <div class="post">
                    <img src="<?= BASE_URL . 'static/images/' . $post["image"] ?>" alt="<?= $post["title"] ?>" class="post_image">
                    <?php if (isset($post['topic'][0]["name"])) : ?>
                        <a href="<?= BASE_URL . 'filtred_posts.php?topic=' . $post['topic'][0]["id"] ?>"
                        class="btn category">
                            <?= $post['topic'][0]["name"] ?>
                        </a>
                    <?php endif;?>
                    <a href="single_post.php?post-slug=<?= $post["slug"] ?>">
                        <h3><?= $post["title"] ?></h3>
                        <div class="info">
                            <span class="date"><?= date('F j, Y', strtotime($post["created_at"]))  ?></span>
                            <span class="read_more">Read more...</span>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
            <!-- more content still to come here ... -->

        </div>
    </div>
    <!-- // Page content -->

    <!-- footer -->
    <?php require_once 'includes/footer.php' ?>
    <!-- // footer -->

    <!-- // container -->
</body>

</html>
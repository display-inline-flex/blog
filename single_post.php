
<?php require_once 'config.php' ?>
    <?php require_once 'includes/public_functions.php' ?>
    <?php require_once 'includes/head_section.php';
    
    if (isset($_GET["post-slug"])){
        $post_slug = $_GET["post-slug"];
        $posts = getPost($post_slug);
    }
    ?>
    <title>LifeBlog | <?= $posts[0]['title'];?> </title>
</head>

<body>

    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div class="content">
            
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>
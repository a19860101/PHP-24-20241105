<?php
    include('../vendor/autoload.php');
    use Zac\Web\Controller\Post;
    Post::store($_REQUEST);

    echo "<script>alert('文章已新增')</script>";
    header('refresh:0;url=index.php');

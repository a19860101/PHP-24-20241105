<?php
    include('../vendor/autoload.php');
    use Zac\Web\Controller\Post;
    // echo $_REQUEST['id'];
    Post::delete($_REQUEST['id']);

    echo "<script>alert('文章已刪除')</script>";
    header('refresh:0;url=index.php');

<?php
    include('../vendor/autoload.php');
    use Zac\Web\Config\DB;
    use Zac\Web\Controller\Post;

    $posts = Post::index();
    print_r($posts);

    // print_r(DB::db());
    // echo Zac\Web\Config\DB::now();
    // echo DB::now();

?>
<?php include('template/header.php'); ?>
<h1>test</h1>
<?php include('template/footer.php'); ?>
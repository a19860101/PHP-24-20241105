<?php
    include('../vendor/autoload.php');
    use Zac\Web\Config\DB;
    use Zac\Web\Controller\Post;

    $posts = Post::index();

    // print_r(DB::db());
    // echo Zac\Web\Config\DB::now();
    // echo DB::now();

?>
<?php include('template/header.php'); ?>
<div class="container mx-auto space-y-8">

<?php foreach($posts as $post){ ?>
    <div class="bg-zinc-200 p-4 rounded-lg">
        <h2 class="text-xl font-bold"><?php echo $post['title']; ?></h2>
        <div><?php echo $post['created_at'];?></div>
        <div>
            <?php echo $post['body']; ?>
        </div>
    </div>
<?php } ?>
</div>
<?php include('template/footer.php'); ?>
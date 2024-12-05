<?php
    include('../vendor/autoload.php');
    $post = Zac\Web\Controller\Post::show($_REQUEST);
?>
<?php include('template/header.php'); ?>
<div class="container mx-auto">
    <div class="bg-zinc-200 p-4 rounded-lg">
        <h2 class="text-xl font-bold"><?php echo $post['title']; ?></h2>
        <div><?php echo $post['created_at'];?></div>
        <div>
            <?php echo $post['body'];?>
        </div>
        <div>
            <a href="index.php" class="text-blue-600" >文章列表</a>
        </div>
    </div>
</div>
<?php include('template/footer.php'); ?>
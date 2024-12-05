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
        <div>
            <small>更新時間：<?php echo $post['updated_at']??$post['created_at'];?></small>
        </div>
        <div>
            <?php echo mb_substr($post['body'],0,100); ?>...
        </div>
        <div class="text-right">
            <a href="show.php?id=<?php echo $post['id'];?>" class="text-blue-600" >繼續閱讀</a>
        </div>
    </div>
<?php } ?>
</div>
<?php include('template/footer.php'); ?>
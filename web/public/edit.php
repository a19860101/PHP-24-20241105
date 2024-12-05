<?php
    include('../vendor/autoload.php');
    $post = Zac\Web\Controller\Post::edit($_REQUEST);
?>
<?php include('template/header.php'); ?>
<div class="container mx-auto">
    <div class="w-full p-8">
        <form action="update.php" method="post">
            <div class="mb-3">
                <label for="">文章標題</label>
                <input type="text" name="title" class="border border-zinc-700 rounded-md p-4 w-full " value="<?php echo $post['title'];?>">
            </div>
            <div class="mb-3">
                <label for="">文章內容</label>
                <textarea name="body" id="" class="border border-zinc-700 rounded-md p-4 w-full h-[300px]"><?php echo $post['body'];?></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $post['id'];?>">
            <input type="submit" value="儲存文章" class="py-2 px-8 bg-sky-400 rounded-lg">
        </form>
    </div>
</div>
<?php include('template/footer.php'); ?>
<?php include('template/header.php'); ?>
<div class="container mx-auto">
    <div class="w-full p-8">
        <form action="store.php" method="post">
            <div class="mb-3">
                <label for="">文章標題</label>
                <input type="text" name="title" class="border border-zinc-700 rounded-md p-4 w-full ">
            </div>
            <div class="mb-3">
                <label for="">文章內容</label>
                <textarea name="body" id="" class="border border-zinc-700 rounded-md p-4 w-full h-[300px]"></textarea>
            </div>
            <input type="submit" value="建立文章" class="py-2 px-8 bg-sky-400 rounded-lg">
        </form>
    </div>
</div>
<?php include('template/footer.php'); ?>
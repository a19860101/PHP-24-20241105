<?php
    // echo $_REQUEST['img'];
    if(isset($_REQUEST['delete'])){
        // echo 'test';
        unlink($_REQUEST['img']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php //echo md5(time()); ?>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">檔案名稱</label>
            <input type="text" name="img_name">
        </div>
        <div>
            <label for="">上傳檔案</label>
            <input type="file" name="data">
        </div>
        <input type="submit" value="上傳">
    </form>
    <?php
        $imgs = glob('images/{*.jpg,*.jpeg,*.png,*.gif,*.webp}',GLOB_BRACE);
    ?>
    <?php foreach($imgs as $img){ ?>
        <div>
            <img src="<?php echo $img; ?>" alt="" width="200">
            <form action="" method="post">
                <input type="hidden" name="img" value="<?php echo $img; ?>">
                <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除？')">
            </form>
        </div>
    <?php } ?>
</body>
</html>
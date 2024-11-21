<?php
    include('db.php');
    $sql = 'SELECT * FROM photos ORDER BY id DESC';
    $imgs = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
    <?php foreach($imgs as $img){ ?>
        <div>
            <h3><?php echo $img['name']; ?></h3>
            <img src="images/<?php echo $img['path']; ?>" alt="" width="200">
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $img['id']; ?>">
                <input type="hidden" name="path" value="<?php echo $img['path']; ?>">
                <input type="submit" value="刪除" name="delete" onclick="return confirm('確認刪除？')">
            </form>
        </div>
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php echo md5(time()); ?>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">上傳檔案</label>
            <input type="file" name="data">
        </div>
        <input type="submit" value="上傳">
    </form>
</body>
</html>
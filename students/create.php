<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>新增資料</h1>
    <form action="store.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="不透露">
            <label for="">不透露</label>
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">地址</label>
            <input type="text" name="address">
        </div>
        <input type="submit" value="新增資料">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>
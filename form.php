<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="response.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone">
        </div>
        <input type="submit">
    </form>
    <!-- 
        在多數的狀況下，表單都用post方法；連結則用get方法，唯一的例外則是搜尋(表單)使用get
    -->
</body>
</html>
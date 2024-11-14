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
        <div>
            <label for="">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
            </select>
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="男">
            <label for="">男</label>
            <input type="radio" name="gender" value="女">
            <label for="">女</label>
            <input type="radio" name="gender" value="不透露">
            <label for="">不透露</label>
        </div>
        <div>
            <label for="">專長</label>
            <input type="checkbox" name="skill[]" value="數學">
            <label for="">數學</label>
            <input type="checkbox" name="skill[]" value="物理">
            <label for="">物理</label>
            <input type="checkbox" name="skill[]" value="化學">
            <label for="">化學</label>
            <input type="checkbox" name="skill[]" value="英文">
            <label for="">英文</label>
        </div>
        <div>
            <label for="">備註</label>
            <textarea name="comment" id=""></textarea>
        </div>
        <input type="submit">
    </form>
    <!-- 
        在多數的狀況下，表單都用post方法；連結則用get方法，唯一的例外則是搜尋(表單)使用get
    -->
</body>
</html>
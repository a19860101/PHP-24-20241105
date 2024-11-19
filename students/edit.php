<?php
    include('db.php');
    extract($_REQUEST);
    // echo $_GET['id'];
    // echo $_REQUEST['id'];
    
    // 方法一 直接取值
    // $sql = 'SELECT * FROM students WHERE id = '.$id;
    // $sql = "SELECT * FROM students WHERE id = {$id}";
    // $student = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

    // 方法二 預備陳述式
    $sql = 'SELECT * FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    // print_r($student);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>詳細資料</h1>
    <form action="store.php" method="post">
        <div>
            <label for="">姓名</label>
            <input type="text" name="name" value="<?php echo $student['name']; ?>">
        </div>
        <div>
            <label for="">性別</label>
            <input type="radio" name="gender" value="女" 
                <?php
                    if($student['gender'] == '女'){echo 'checked';} 
                ?>
            >
            <label for="">女</label>
            <input type="radio" name="gender" value="男"
                <?php
                    if($student['gender'] == '男'){echo 'checked';} 
                ?>
            >
            
            <label for="">男</label>
            <input type="radio" name="gender" value="不透露"
                <?php echo $student['gender'] == '不透露'?'checked':''; ?>
            >
            <label for="">不透露</label>
        </div>
        <div>
            <label for="">電話</label>
            <input type="text" name="phone" value="<?php echo $student['phone']; ?>">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $student['email']; ?>">
        </div>
        <div>
            <label for="">地址</label>
            <input type="text" name="address" value="<?php echo $student['address']; ?>">
        </div>
        <input type="submit" value="更新資料">
        <input type="button" value="取消" onclick="history.back()">
    </for m>
</body>
</html>
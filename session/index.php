<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_SESSION['USER'])){ ?>
    <?php 
        echo $_SESSION['USER']['username'].'你好';
    ?>
    <a href="logout.php">登出</a>
    <?php } ?>


    <?php if(!isset($_SESSION['USER'])){ ?>
    <form action="login.php" method="post">
        <div>
            <label for="">帳號</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="">密碼</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="登入">
    </form>
    <?php } ?>
    <a href="002.php">002</a>
</body>
</html>
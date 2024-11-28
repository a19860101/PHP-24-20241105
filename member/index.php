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
    <nav>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
        <a href="create.php">會員註冊</a>
        <?php } ?>
        <?php if(isset($_SESSION['AUTH'])){ ?>
        <a href="logout.php">登出</a>
        <?php } ?>
    </nav>
    <h1>會員系統</h1>
    <?php if(isset($_SESSION['AUTH'])){ ?>
    <div><?php echo $_SESSION['AUTH']['username']; ?> 你好</div>
    <?php } ?>

    <?php if(!isset($_SESSION['AUTH'])){ ?>
    <form action="auth.php" method="post">
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

    
</body>
</html>
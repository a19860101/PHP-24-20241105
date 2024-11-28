<?php
    session_start();
    include('function.php');
    $users = index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #888;
            padding: 8px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <nav>
        <a href="index.php">首頁</a>
        <?php if(!isset($_SESSION['AUTH'])){ ?>
        <a href="create.php">會員註冊</a>
        <?php } ?>
        <?php if(isset($_SESSION['AUTH'])){ ?>
        <a href="list.php">會員列表</a>
        <a href="logout.php">登出</a>
        <?php } ?>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>建立日期</th>
        </tr>
        <?php foreach($users as $user){ ?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['created_at'];?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
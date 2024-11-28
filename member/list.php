<?php
    session_start();
    if(!isset($_SESSION['AUTH']) || $_SESSION['AUTH']['role'] != 'admin'){
        echo "<script>alert('您沒有權限')</script>";
        header('refresh:0;url=index.php');
    }
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
            <?php if($_SESSION['AUTH']['role'] == 'admin'){ ?>
            <a href="list.php">會員列表</a>
            <?php } ?>
        <a href="logout.php">登出</a>
        <?php } ?>
    </nav>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>建立日期</th>
            <th>更新日期</th>
            <th>角色</th>
            <th>動作</th>
        </tr>
        <?php foreach($users as $user){ ?>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td><?php echo $user['username'];?></td>
            <td><?php echo $user['created_at'];?></td>
            <td><?php echo $user['updated_at']??'尚未修改';?></td>
            <td>
                <?php echo $user['role'] == 'admin'? '管理員':'一般會員';?>
            </td>
            <td>
                <?php if($user['role'] == 'admin'){ ?>
                    <?php if($user['id'] == $_SESSION['AUTH']['id']){ ?>
                    <span>管理員</span>
                    <?php }else{ ?>
                    <a href="setRole.php?id=<?php echo $user['id'];?>&role=<?php echo $user['role'];?>">撤銷管理員</a>
                    <?php } ?>
                <?php }else{ ?>
                <a href="setRole.php?id=<?php echo $user['id'];?>&role=<?php echo $user['role'];?>">設定為管理員</a>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    // $result = $pdo->query($sql);
    // $students = $result->fetchAll();
    $students = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    // print_r($students);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
        }
        table,td,th {
            border: 1px solid #000;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>學員通訊錄</h1>
    <a href="create.php">新增學員資料</a>
    <table>
        <tr>
            <th>id</th>
            <th>照片</th>
            <th>姓名</th>
            <th>性別</th>
            <th colspan="2">動作</th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo $student['id'];?></td>
            <td>
                <?php if($student['avatar'] != null){ ?>
                <img src="images/<?php echo $student['avatar'];?>"width="100">
                <?php } ?>
                <?php if($student['avatar'] == null){ ?>
                    尚未上傳
                <?php } ?>
            </td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['gender'];?></td>
            <td>
                <a href="edit.php?id=<?php echo $student['id'];?>">詳細資料</a>
            </td>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $student['id'];?>">
                    <input type="hidden" name="avatar" value="<?php echo $student['avatar'];?>">
                    <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
                </form>
            </td>
        </tr>
        <?php } ?>

        <?php 
            // foreach($students as $student){
            //     echo '<tr>';
            //     echo '<td>'.$student['id'].'</td>';
            //     echo '<td>'.$student['name'].'</td>';
            //     echo '<td>'.$student['gender'].'</td>';
            //     echo '</tr>';

            // }
        ?>
    </table>
</body>
</html>
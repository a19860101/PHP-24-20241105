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
        }
    </style>
</head>
<body>
    <h1>學員通訊錄</h1>
    <a href="create.php">新增學員資料</a>
    <table>
        <tr>
            <th>id</th>
            <th>姓名</th>
            <th>性別</th>
        </tr>
        <?php foreach($students as $student){ ?>
        <tr>
            <td><?php echo $student['id'];?></td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['gender'];?></td>
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
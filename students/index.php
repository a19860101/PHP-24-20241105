<?php
    include('db.php');
    $sql = 'SELECT * FROM students';
    // $result = $pdo->query($sql);
    // $students = $result->fetchAll();
    $students = $pdo->query($sql)->fetchAll();
    print_r($students);
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
    <a href="#">新增學員資料</a>
    <table>
        <tr>
            <th>id</th>
            <th>姓名</th>
        </tr>
    </table>
</body>
</html>
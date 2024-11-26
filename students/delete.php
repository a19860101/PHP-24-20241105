<?php 
    include('db.php');

    unlink('images/'.$_REQUEST['avatar']);

    $sql = 'DELETE FROM students WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_REQUEST['id']]);

    echo '<script>alert("學員資料已刪除");</script>';
    header('refresh:0;url=index.php');
<?php 
    include('db.php');
    extract($_REQUEST);
    unlink('images/'.$path);
    $sql = 'DELETE FROM photos WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    echo '<script>alert("檔案已刪除")</script>';
    header('refresh:0;url=index.php');
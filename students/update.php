<?php
    include('db.php');
    extract($_REQUEST);
    print_r($_REQUEST);
    $sql = 'UPDATE students SET
            name = ?,
            gender = ?,
            phone = ?,
            email = ?,
            address = ?
            WHERE id = ?
    ';  
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$gender,$phone,$email,$address,$id]);

    echo '<script>alert("資料已更新")</script>';
    header('refresh:0;url=edit.php?id='.$id);
    // header('location:edit.php?id='.$id);
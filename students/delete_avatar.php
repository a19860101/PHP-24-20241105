<?php
    include('db.php');
    extract($_REQUEST);
    // print_r($_REQUEST);
    
    unlink('images/'.$avatar);
    $sql = 'UPDATE students SET avatar = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([null,$id]);

    // header('refresh:1;url=edit.php?id='.$id);
    header('location:edit.php?id='.$id);
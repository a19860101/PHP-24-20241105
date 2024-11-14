<?php
    include('db.php');
    // print_r($_REQUEST);
    extract($_REQUEST);

    $sql = 'INSERT INTO students(name,gender,phone,email,address)VALUES(?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$gender,$phone,$email,$address]);
    // $stmt->execute([
    //     $_REQUEST['name'],
    //     $_REQUEST['gender'],
    //     $_REQUEST['phone'],
    //     $_REQUEST['email'],
    //     $_REQUEST['address']
    // ]);

    // header('location:index.php');
    echo '<script>alert("學員資料已新增");</script>';
    header('refresh:0;url=index.php');
<?php
    include('db.php');
    //會員註冊
    function store($request){
        extract($request);
        
        $sql = 'INSERT INTO users(username,password,created_at)VALUES(?,?,?)';
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$username, $password, now()]);
    
    }
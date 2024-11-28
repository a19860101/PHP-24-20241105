<?php
    include('db.php');
    //會員註冊
    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(username,password,created_at)VALUES(?,?,?)';
        
        //檢查是否重複註冊
        if(checkUser($username) != 0){
            return checkUser($username);
        }
        try{
            $password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = pdo()->prepare($sql);
            $stmt->execute([$username, $password, now()]);
            return [
                'errorCode' => 0,
                'status' => '註冊成功'
            ];
        }catch(PDOException $e){
            echo $e->getMessage();
            return [
                'errorCode' => 1,
                'status' => '註冊失敗'
            ];
        }
    
    }
    function checkUser($username){
        $sql = 'SELECT * FROM users WHERE username = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$username]);
        // return $stmt->rowCount();
        if($stmt->rowCount() > 0){
            return [
                'errorCode' => 2,
                'status' => '帳號重複，請重新註冊'
            ];
        }else{
            return 0;
        }
    }
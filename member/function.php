<?php
    include('db.php');
    //會員註冊
    function store($request){
        extract($request);
        $sql = 'INSERT INTO users(username,password,created_at)VALUES(?,?,?)';

        if(empty($username) || empty($password)){
            return [
                'errorCode' => 9,
                'status' => '請輸入資料'
            ];
        }

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
    function auth($request){
        session_start();
        extract($request);
        $sql = 'SELECT * FROM users WHERE username = ?';
        $stmt = pdo()->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            return [
                'errorCode' => 3,
                'status' => '帳號不存在，請重新註冊或登入'
            ];
        }
        if(password_verify($password,$user['password'])){
            $_SESSION['AUTH'] = $user;
            return [
                'errorCode' => 0,
                'status' => '登入成功'
            ];
        }else{
            return [
                'errorCode' => 4,
                'status' => '帳號或密碼錯誤'
            ];
        }
        
    }
    function index(){
        $sql = 'SELECT * FROM users ORDER BY updated_at DESC';
        $result = pdo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function set_role($id,$role){
        $sql = 'UPDATE users SET role=?,updated_at=? WHERE id=?';
        $stmt = pdo()->prepare($sql);

        $role = $role == 'admin'?'member':'admin';
        // if($role=='admin'){
        //     $role = 'member';
        // }else{
        //     $role = 'admin';
        // }
        $stmt->execute([$role,now(),$id]);
    }
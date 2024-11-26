<?php
    include('db.php');
    // print_r($_REQUEST);
    extract($_REQUEST);

    // 上傳大頭照
    // extract($_FILES['avatar']);
    $error = $_FILES['avatar']['error'];
    $size = $_FILES['avatar']['size'];
    $avatar_name = $_FILES['avatar']['name'];
    $tmp_name = $_FILES['avatar']['tmp_name'];

    if($error == 4){
        echo '<script>alert("請選擇檔案")</script>';
        header('refresh:0;url=create.php');
        return;
    }

    $max_size = 1 * 1024 * 1024;
    if($size > $max_size){
        echo '<script>alert("檔案超過限制")</script>';
        header('refresh:0;url=create.php');
        return;
    }

    // 如果資料夾不存在就建立資料夾
    if(!is_dir('images')){
        mkdir('images');
    }

    // 隨機檔名
    $randName = md5(time());

    // 副檔名
    $ext = pathinfo($avatar_name,PATHINFO_EXTENSION);
    $ext = strtolower($ext);

    // 完整檔名
    // $fullname = $randName.'.'.$ext;
    $fullname = "{$randName}.{$ext}";

    // 目標位置
    $target = 'images/'.$fullname;

    // 判斷格式是否正確
    if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif' && $ext != 'webp'){
        // echo '<script>alert("請上傳正確的格式")</script>';
        // header('refresh:0;url=create.php');
        return;
    }
    // 新增資料
    $sql = 'INSERT INTO students(name,avatar,gender,phone,email,address)VALUES(?,?,?,?,?,?)';
    $stmt = $pdo->prepare($sql);
    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            $stmt->execute([$name,$fullname,$gender,$phone,$email,$address]);
            echo '<script>alert("學員資料已新增");</script>';
            header('refresh:0;url=index.php');
        }
    }else{
        echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        header('refresh:0;url=index.php');


    }

    

    
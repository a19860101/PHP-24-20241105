<?php
    include('db.php');
    extract($_FILES['data']);
    extract($_REQUEST);
    

    if($error == 4){
        echo '<script>alert("請選擇檔案")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    $max_size = 1 * 1024 * 1024;
    if($size > $max_size){
        echo '<script>alert("檔案超過限制")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    // 如果資料夾不存在就建立資料夾
    if(!is_dir('images')){
        mkdir('images');
    }

    // 隨機檔名
    $randName = md5(time());

    // 副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    $ext = strtolower($ext);

    // 完整檔名
    // $fullname = $randName.'.'.$ext;
    $fullname = "{$randName}.{$ext}";

    // 目標位置
    $target = 'images/'.$fullname;

    // 判斷格式是否正確
    if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif' && $ext != 'webp'){
        echo '<script>alert("請上傳正確的格式")</script>';
        header('refresh:0;url=index.php');
        return;
    }

    // SQL
    $sql = 'INSERT INTO photos(name,path,created_at)VALUES(?,?,?)';
    $stmt = $pdo->prepare($sql);

    if($img_name == ''){
        $img_name = $name;
    }

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            $stmt->execute([$img_name,$fullname,'2024-11-21']);

            echo '<script>alert("檔案已上傳")</script>';
            header('refresh:0;url=index.php');
        }
    }else{
        echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        header('refresh:0;url=index.php');


    }
    /* 
        上傳錯誤碼
        https://www.php.net/manual/en/features.file-upload.errors.php

    */
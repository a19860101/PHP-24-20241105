<?php
    extract($_FILES['data']);
    print_r($_FILES['data']);
    

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

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            // echo '<script>alert("檔案已上傳")</script>';
            // header('refresh:0;url=index.php');
        }
    }else{
        echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        header('refresh:0;url=index.php');


    }
    /* 
        上傳錯誤碼
        https://www.php.net/manual/en/features.file-upload.errors.php

    */
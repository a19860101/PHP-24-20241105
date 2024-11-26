<?php
    include('db.php');
    extract($_REQUEST);
    print_r($_REQUEST);

    $error = $_FILES['avatar']['error'];
    $size = $_FILES['avatar']['size'];
    $avatar_name = $_FILES['avatar']['name'];
    $tmp_name = $_FILES['avatar']['tmp_name'];

    $max_size = 1 * 1024 * 1024;
    if($size > $max_size){
        echo '<script>alert("檔案超過限制")</script>';
        header('refresh:0;url=create.php');
        return;
    }

    // 隨機檔名
    $randName = md5(time());

    // 副檔名
    $ext = pathinfo($avatar_name,PATHINFO_EXTENSION);
    $ext = strtolower($ext);

    // 完整檔名
    $fullname = "{$randName}.{$ext}";

    // 目標位置
    $target = 'images/'.$fullname;

    // 判斷格式是否正確
    if(isset($tmp_name)){
        if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif' && $ext != 'webp'){
            echo '<script>alert("請上傳正確的格式")</script>';
            header('refresh:0;url=edit.php?id='.$id);
            return;
        }
    }   
    // 更新資料
    $sql = 'UPDATE students SET
            name = ?,
            avatar = ?,
            gender = ?,
            phone = ?,
            email = ?,
            address = ?
            WHERE id = ?
    ';  
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
    
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
            echo '<script>alert("學員資料已更新");</script>';
            header('refresh:0;url=edit.php?id='.$id);
        }
    }else if($error == 4){
        $stmt->execute([$name,null,$gender,$phone,$email,$address,$id]);
        echo '<script>alert("學員資料已更新");</script>';
        header('refresh:0;url=edit.php?id='.$id);
    }else{
        echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        header('refresh:0;url=index.php');


    }
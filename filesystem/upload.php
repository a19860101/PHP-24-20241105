<?php
    extract($_FILES['data']);

    $target = 'images/'.$name;

    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo '<script>alert("檔案已上傳")</script>';
            header('refresh:0;url=index.php');
        }
    }else{
        echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        header('refresh:0;url=index.php');


    }
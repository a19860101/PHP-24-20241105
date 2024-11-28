<?php

    include('function.php');

    $result = store($_REQUEST);
    if($result['errorCode'] == 0){
        echo '<script>alert("申請成功，請重新登入")</script>';
        header('refresh:0;url=index.php');
    }
    if($result['errorCode'] == 1){
        echo '<script>alert("申請失敗，請重新登入")</script>';
        header('refresh:0;url=index.php');
    }
    if($result['errorCode'] == 2){
        echo '<script>alert("申請失敗，請重新申請")</script>';
        header('refresh:0;url=index.php');
    }

    
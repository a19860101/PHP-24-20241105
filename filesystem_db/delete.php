<?php 
    include('function.php');
    delete($_REQUEST);
    echo '<script>alert("檔案已刪除")</script>';
    header('refresh:0;url=index.php');
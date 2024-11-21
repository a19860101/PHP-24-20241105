<?php
    include('function.php');
    store($_REQUEST,$_FILES['data']);

    echo '<script>alert("上傳成功")</script>';
    header('refresh:0;url=index.php');
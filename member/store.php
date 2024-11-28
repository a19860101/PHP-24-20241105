<?php

    include('function.php');

    $result = store($_REQUEST);
    extract($result);

    echo "<script>alert('{$status}')</script>";

    $errorCode == 0 ? 
    header('refresh:0;url=index.php') :
    header('refresh:0;url=create.php');



    
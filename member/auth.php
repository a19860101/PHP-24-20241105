<?php
    include('function.php');
    $result = auth($_REQUEST);
    extract($result);

    echo "<script>alert('{$status}')</script>";

    $url = $errorCode == 0 ? 'index.php' : 'index.php?error';
    header('refresh:0;url='.$url);


    // switch($errorCode){
    //     case 0:
    //         $url = 'index.php';
    //         break;
    //     case 3:
    //         $url = 'index.php';
    //         break;
    //     case 4:
    //         $url = 'index.php';
    //         break;
    // }

    header('refresh:0;url='.$url);

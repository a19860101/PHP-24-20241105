<?php
    session_start();

    // session_destroy();
    unset($_SESSION['USER']);

    echo '<script>alert("已登出")</script>';
    header('refresh:0;url=index.php');
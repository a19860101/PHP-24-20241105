<?php
    session_start();

    $_SESSION['USER'] = [
        'username' => $_REQUEST['username'],
        'password' => $_REQUEST['password']
    ];

    header('location:002.php');
<?php
    // print_r($_GET);

    // echo $_GET['name'];
    // echo '<br>';
    // echo $_GET['phone'];
    // echo $_POST['name'];
    // echo '<br>';
    // echo $_POST['phone'];
    // echo $_REQUEST['name'];
    // echo '<br>';
    // echo $_REQUEST['phone'];
    extract($_REQUEST);
    echo $name;
    echo '<br>';
    echo $phone;
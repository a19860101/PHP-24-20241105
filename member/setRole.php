<?php
    include('function.php');
    extract($_REQUEST);
    set_role($id, $role);

    header('location:list.php');
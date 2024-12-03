<?php 
    // include('User.php');
    // include('Post.php');

    // echo User::index();
    // echo Post::index();

    // echo ooc\Test\User::index();
    // echo ooc\Test2\Post::index();

    include('db/config.php');
    include('controller/config.php');

    echo ooc\controller\Config::index();
    echo '<br>';
    echo ooc\db\Config::index();
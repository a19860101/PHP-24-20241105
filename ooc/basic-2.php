<?php 
    class User {
        // 建構子

        function __construct(){
            // echo '<script>alert("我被建立了");</script>';
            return '我被建立了';
        }

        // 靜態方法 (不可使用$this)
        static function test($name){
            return '我是'.$name;
        }
    }

    $u1 = new User;
    $u2 = new User;
    $u3 = new User;

    echo User::test('john');
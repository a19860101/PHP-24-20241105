<?php
    // 單行註解 ctrl+/
    /* 多行註解 alt + shift + a */
    
    // 變數
    /* 
        命名原則
        數字不可當開頭
        不可使用特殊符號
        可使用底線
        大小寫有別
        不可使用保留字
    */
    // $a = 100;
    // $A = 90;
    // $x = 'hello';
    // $y = ['test','123'];

    // Super Global Variable 超級全域變數
    // $_POST
    // $_GET
    // $_REQUEST
    // $_SERVER
    // $_SESSION

    // 常數
    // define(常數名稱,常數值);
    // const 常數名稱 = 常數值;
    // define("USER","qqq12345");
    const USER = 'poiuy';

    // echo "您是第 $a 位訪客";
    // echo "您是第{$a}位訪客";
    // echo '您是第 $a 位訪客';
    // echo '您是第'.$a.'位訪客';
    // echo "您是第".$a."位訪客";
    // echo "您是第".$a.'位訪客';
    // echo $a.'test'.$A;
    
    // print_r($y);
    // var_dump($y);

    // 資料型別

    // 整數int
    $data_int = 100;

    // 浮點數float
    $data_float = 3.2;

    // 字串 string
    $data_string = '哈囉';

    // 布林 boolean
    $data_bool = false;

    // 陣列 array
    // $data_array = ['apple','123','qqq'];
    $data_array = array();
    $data_array[0] = 'Apple';
    $data_array[1] = 'Cat';

    // var_dump($data_array);
    // echo $data_array[1];

    // 函式 function
    function foo(){
        return 'hello function';
    }

    // echo foo();
    // var_dump(foo());

    // 類別 class
    class Role {
        public $hp = 100;
    }

    $jay = new Role;
    // $jay->hp = 999;

    // echo $jay->hp;
    // var_dump($jay);

    // null 
    $data_null = null;
    // $data_0 = 0;
    // $data_ = '';
    // var_dump($data_null);

    $x =100;
    $x = (string)$x;

    $y = '123';
    $y = (float)$y;

    $z = 'hello';
    $z = (int)$z;
    var_dump($z);
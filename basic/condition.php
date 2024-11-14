<?php
// 判斷式
$x = 10;
// if
if($x > 0){
    echo 'success';
}
// if...else
if($x > 0){
    echo 'success';
}else{
    echo 'error';
}
// if...elseif
if($x > 0){
    echo 'success';
}elseif($x < 0){
    echo 'error';
}
// if...elseif...else
if($x > 0){
    echo 'success';
}elseif($x < 0){
    echo 'error';
}else{
    echo '0';
}

if($x > 80){}
elseif($x > 60){}

if($x < 60){}
elseif($x < 80){}
// switch

switch($x){
    case 0:
        echo 0;
        break;
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    default:
        echo 'hello';
}
switch(true){
    case $x > 0:
        echo '正';
        break;
    case $x < 0:
        echo '負';
        break;
    default:
        echo '零';
}
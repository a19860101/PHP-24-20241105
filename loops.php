<?php
// loops迴圈

// for
// for(初始值;終止條件;迴圈執行後的動作){動作}
for($i=0;$i<16;$i++){
    // echo $i;
}

// while
// 初始值
// while(終止條件){動作;迴圈執行後的動作}

$j = 0;
while($j < 10){
    $j++;
    // echo $j;
}

// foreach

$datas = ['大麥克','麥香雞','麥香魚','勁辣雞腿堡','雙層牛肉吉事堡','麥克雞塊'];

// echo $datas[0];
// echo $datas[1];
echo count($datas);
for($d=0;$d<count($datas);$d++){
    echo $datas[$d];
}

foreach($datas as $data){
    // echo $data;
    echo "<div>{$data}</div>";
}
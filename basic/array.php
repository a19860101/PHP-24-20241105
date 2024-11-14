<?php
    // $datas =  array();
    // $datas[0] = 'apple';
    // $datas[1] = 'cat';

    // $datas = array('apple','cat');
    
    // $datas = ['apple','cat'];

    // 關聯陣列

    // [key => value],[鍵=>值],[屬性=>值]

    $datas = [
        '紅茶' => 30,
        '奶茶' => 35,
        '綠茶' => 30,
        '珍珠奶茶'=> 80
    ];
    // var_dump($datas);
    foreach($datas as $key => $value){
        // echo "<div>{$key}:{$value}元</div>";
    }
    $mac = ['大麥克','麥香雞','麥香魚','勁辣雞腿堡','雙層牛肉吉事堡','麥克雞塊'];

    // count() 計算陣列數量

    // echo count($datas);

    // implode() 陣列轉字串
    // echo implode('+',$mac);

    // explode() 字串轉陣列
    $txt = 'hello,php,!';
    $txt_array = explode(',',$txt);
    // print_r($txt_array);

    // extract() 解構
    $beans = [
        'name' => '阿拉比卡',
        'area' => '高海拔',
        'shape' => '圓型'
    ];

    // echo $beans['name'];
    // echo $beans['area'];
    // echo $beans['shape'];
    // extract($beans);
    // echo $name;
    // echo $area;
    // echo $shape;

    // compact() 緊湊
    $coffee = '拿鐵';
    $price = '180';
    $brand = '星巴克';

    $c = [$coffee,$price,$brand];
    // print_r($c);

    $c2 = compact('coffee','price','brand');
    // print_r($c2);

    $c3 = [
        'coffee' => $coffee,
        'price' => $price,
        'brand' => $brand
    ];
    // print_r($c3);


    // in_array() 判斷陣列內是否有該資料
    
    // var_dump(in_array('麥香雞',$mac));
    // var_dump(in_array('照燒豬肉堡',$mac));

    // is_array() 判斷是否為陣列
    // var_dump(is_array($mac));
    // var_dump(is_array($txt));

    $data = ['banana','apple','dog'];
    sort($data);
    // print_r($data);

    rsort($data);
    // print_r($data);

    ksort($beans);
    // print_r($beans);
    
    krsort($beans);
    // print_r($beans);

    asort($datas);
    // print_r($datas);
    
    arsort($datas);
    // print_r($datas);

    shuffle($beans);
    print_r($beans);
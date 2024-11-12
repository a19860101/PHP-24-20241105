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
    
    // echo $_REQUEST['name'];
    // echo '<br>';
    // echo $_REQUEST['phone'];
    // echo '<br>';
    // echo $_REQUEST['edu'];
    // echo '<br>';
    // echo $_REQUEST['gender'];
    // echo '<br>';
    
    extract($_REQUEST);
    // echo $name;
    // echo '<br>';
    // echo $phone;
    // echo '<br>';
    // echo $edu;
    // echo '<br>';
    // echo $gender;
    // echo '<br>';
    // print_r($skill);
    // echo implode(',',$skill);
    // echo '<br>';
    // echo $comment;
    function check($input){
        // 去除前後空白字元
        $input = trim($input); 
        //去除反斜線\
        $input = stripslashes($input); 
        //將特殊字元實體化
        $input = htmlspecialchars($input); 
        return $input;
    }

    if(check($name) == ''){
        echo '請輸入姓名';
    }else{
        $name = check($name);
        echo "<div>姓名:{$name}</div>";
    }

    if(empty(check($phone))){
        echo '請輸入電話';
    }else{
        $phone = check($phone);
        echo "<div>電話:{$phone}</div>";
    }
    if(check($comment) == null){
        echo '請輸入備註';
    }else{
        $comment = check($comment);
        echo "<div>備註:{$comment}</div>";
    }


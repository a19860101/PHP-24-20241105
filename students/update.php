<?php
    include('db.php');
    extract($_REQUEST);
    // print_r($_REQUEST);

    $error =  '';
    $size =  '';
    $avatar_name =  '';
    $tmp_name =  '';
    $fullname =  '';
    $target = '';

    if(isset($_FILES['avatar'])){
        $error = $_FILES['avatar']['error'];
        $size = $_FILES['avatar']['size'];
        $avatar_name = $_FILES['avatar']['name'];
        $tmp_name = $_FILES['avatar']['tmp_name'];

        $max_size = 1 * 1024 * 1024;
        if($size > $max_size){
            echo '<script>alert("檔案超過限制")</script>';
            header('refresh:0;url=create.php');
            return;
        }

        // 隨機檔名
        $randName = md5(time());

        // 副檔名
        $ext = pathinfo($avatar_name,PATHINFO_EXTENSION);
        $ext = strtolower($ext);

        // 完整檔名
        $fullname = "{$randName}.{$ext}";

        // 目標位置
        $target = 'images/'.$fullname;

    // 判斷格式是否正確
        if($error == 0){

            if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif' && $ext != 'webp'){
                echo '<script>alert("請上傳正確的格式")</script>';
                header('refresh:0;url=edit.php?id='.$id);
                return;
            }
        }
    }   
    // 更新資料
    
    $sql = 'UPDATE students SET
            name = ?,
            avatar = ?,
            gender = ?,
            phone = ?,
            email = ?,
            address = ?
            WHERE id = ?
    ';  
    $stmt = $pdo->prepare($sql);
    // $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
    
    switch($error){
        case 0:
            if(move_uploaded_file($tmp_name,$target)){
                $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
                echo '<script>alert("學員資料已更新");</script>';
                header('refresh:0;url=edit.php?id='.$id);
            }else{
                echo '上傳錯誤';
            }
            break;
        case 1:
            echo '上傳的文件超出了 php.ini 中的 upload_max_filesize 大小。';
            break;
        case 2:
            echo '上傳的文件超出了 HTML 表單中指定的 MAX_FILE_SIZE 大小。';
            break;
        case 3:
            echo '只有部分檔案上傳';
            break;     
        case 4:
            $fullname = null;
            // $stmt = $pdo->prepare($sql);
            $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
            echo '<script>alert("資料已修改");</script>';
            // header('refresh:0;url=index.php');
            break;
        case 6:
            echo '遺失暫存資料夾';
            break;
        case 7:
            echo '無法寫入磁碟';
            break;
        case 8:
            echo '系統無法使用檔案上傳功能';
            break;
        default:
            $fullname = $avatar;
            $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
            echo '<script>alert("資料已修改");</script>';
            break;



    }

    // if($error == 0){
    //     if(move_uploaded_file($tmp_name,$target)){
    //         $stmt->execute([$name,$fullname,$gender,$phone,$email,$address,$id]);
    //         echo '<script>alert("學員資料已更新");</script>';
    //         header('refresh:0;url=edit.php?id='.$id);
    //     }
    // }else if($error == 4){
    //     $stmt->execute([$name,null,$gender,$phone,$email,$address,$id]);
    //     echo '<script>alert("學員資料已更新");</script>';
    //     header('refresh:0;url=edit.php?id='.$id);
    // }else{
        // echo $error;
        // echo '<script>alert("發生錯誤，請洽網站管理員")</script>';
        // header('refresh:0;url=index.php');


    // }

    /* 
        有圖片時，不移除圖片更新資料
        有圖片時，移除圖片更新資料
        無圖片時，新增圖片更新資料
        無圖片時，不新增圖片更新資料
    */
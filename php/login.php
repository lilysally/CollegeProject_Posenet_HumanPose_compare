<?php
    require("connect.php");// or require_once 'connect.php'; 
    session_start();
    if ((!empty($_POST['account'])) and (!empty($_POST['password']))) //account 跟 password的值不是空值(null)
    {
        $username = $_POST['account'];
        $password = $_POST['password'];

        $sql_db_users = "SELECT * FROM users where account='$username' AND psd='$password'"; //查詢資料庫中的『users』資料表
        $result1 = mysqli_query($link,$sql_db_users);
    
        //確認有此帳密
        if(mysqli_num_rows($result1)){//取得查詢結果筆數，true:return int;false:0;
            $row = mysqli_fetch_array($result1); //以陣列儲存查詢結果
            $identity = $row['identity']; //從$row中找到欄位名稱為identity的資料內容
            // echo"登入成功";
            
            //確認身分別，並跳轉至對應頁面
            if ($identity == '老師')
            {
                $_SESSION['login_name'] = $row['name'];//透過登入取得SESSION，才能進入老師畫面
                header("Location:../webpage/page6.php");
            }
            else
            {
                $_SESSION['login_name'] = $row['name'];
                header("location:../webpage/page7.php");
            }
        }
        else{
            header("Location:../webpage/Page02.html");
        }
    }else{
        header("Location:../webpage/Page02.html");
    }
?>


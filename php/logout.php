<?php
    require("connect.php");//不確定有沒有需要這段
	//啟動session
	session_start();

	//清除session
	session_unset();

	//使用php header 來轉址 返回登入頁
	header("Location:../webpage/Page02.html");
?>
<?php

$host = 'localhost';//127.0.0.1
$dbuser ='root';
$dbpassword = '';
$dbname = 'posenet';

$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);//建立與MySQL連結

if($link)
{
	mysqli_query($link,'SET NAMES utf-8');// 設定字元集 (這行要有，不然下面新增資料的中文部分，會是亂碼)
	echo "資料庫連結成功<br>";
}else
{
	echo "資料庫連結失敗<br>" . mysqli_connect_error();
	//die()顯示連結失敗的訊息並終止城市執行
}
?>
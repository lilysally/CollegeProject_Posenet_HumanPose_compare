<?php
session_start();
date_default_timezone_set('Asia/Taipei');//設定時區
// $_SESSION["state1"] = 0;
// $_SESSION["state2"] = 0;
$_SESSION["state1"] = 1;
// $_SESSION["path1"]="C:/xampp/htdocs/posenet/example/example01.mp4";

if(($_FILES["file1"]["error"] == 0) and ($_FILES["file1"]["type"] == 'video/mp4'))//如果有接收到檔案且為mp4檔
{
    $origin_filename1 = explode(".", $_FILES['file1']['name']);
    $upload_filename1 = date("Y-m-d_His") . "." . $origin_filename1[1];
    $file_path1 = "C:/xampp/htdocs/posenet/upload/".$upload_filename1;//定義檔案絕對路徑
    move_uploaded_file($_FILES["file1"]["tmp_name"], $file_path1);//
    $_SESSION["path1"] = $file_path1;
    $_SESSION["state1"] = 1;
}

if(($_FILES["file2"]["error"] == 0) and ($_FILES["file2"]["type"] == 'video/mp4'))//如果有接收到檔案且為mp4檔
{
    $origin_filename2 = explode(".", $_FILES['file2']['name']);
    $upload_filename2 = date("Y-m-d_His") . "." . $origin_filename2[1];
    $file_path2 = "C:/xampp/htdocs/posenet/upload/".$upload_filename2;//定義檔案絕對路徑
    move_uploaded_file($_FILES["file2"]["tmp_name"], $file_path2);//
    $_SESSION["path2"] = $file_path2;
    $_SESSION["state2"] = 1;
}

?>
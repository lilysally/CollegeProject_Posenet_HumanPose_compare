<?php
session_start();

include('connect.php');

$path1 = $_SESSION['path1'];
$path2 = $_SESSION['path2'];

// echo $path1."<br>";
// echo $path2."<br>";
$datas = array();

// $sql = "SELECT 'score', 'output_path1','output_path2' FROM test_path WHERE 'file_path1' = $path1 and 'file_path2' = $path2 ";

$sql = "SELECT result , output_path1 , output_path2 FROM test_path WHERE file_path1 = '$path1' AND file_path2 = '$path2';";

// $sql = "SELECT score FROM test_path WHERE file_path1 = '$path1' AND file_path2 = '$path2';";

// echo $sql."<br>";

$outcome = mysqli_query($link,$sql);

$row_result = mysqli_fetch_assoc($outcome);

$result=$row_result['result'];
$output_path1=$row_result['output_path1'];
$output_path2=$row_result['output_path2'];
//echo $output_path1;
$relaPath1 = preg_split("/\// ", $output_path1);

$newpath1 = '../'.$relaPath1[4].'/'.$relaPath1[5];

$relaPath2 = preg_split("/\// ", $output_path2);
$newpath2 = '../'.$relaPath2[4].'/'.$relaPath2[5];

// echo $output_path1;
// echo "<br>";
// echo $newpath1;



// 將以下3個設為變數
// echo $result."<br>";
// echo $output_path1."<br>";
// echo $output_path2."<br>";

?>

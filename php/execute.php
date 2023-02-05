<?php

session_start();
set_time_limit(0);//防止執行超時、解除限制（原本是120s就會掛掉）

$state1=$_SESSION["state1"]; 
$state2=$_SESSION["state2"];

if ( $state1 == 1 and $state2 == 1){
    $path1 = $_SESSION['path1'];
    $path2 = $_SESSION['path2'];

    exec ( "activate boxing && python rewrite.py  $path1 $path2 ",$log,$status);//傳值成功
    // exec ("activate boxing python test.py ",$log,$status);//傳值成功
    echo print_r($log);
    echo "<br>";
    echo $status;
    if ($status == 0) {
        header("location: ../webpage/page5.php");
    }
}else {
    header("location: ../webpage/Page04.html");
}



  

?>
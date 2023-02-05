<!-- <?php
$fromurl="http://127.0.0.1/posenet/webpage/Page02.html"; //定義早訪網址
if( $_SERVER['HTTP_REFERER'] != $fromurl )//如果不是從此網址來
{
header("Location:".$fromurl);//執行跳轉
exit;//结束
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style03.css" >
    <?php include("../php/information.php");?>
    <?php include("../php/temp_file.php");?>
    <title>page7</title>
</head>
<body class="center">
	<div class="wrapper">
        <div class="content">
        <div class="content_in2" style="display: inline-block;">
            <div class="Uppercolumn">
                <div style="float: left;height: 100%;">課程ABC</div>
                <a
                        href="../php/logout.php"
                        style="float: right; width: 10%; height: 100%"
                        >登出</a>
            </div><br>
            <div class="leftblock1">
                <div style="width: 100%;height: 40%;border: 0px solid #000;text-align: left;">
                    <div style="padding: 10px;">
                        <p style="text-align: center;">基本資料</p>
                        <p style="padding-top: 5%">姓名：<?php echo $name;?></p>
                        <p style="padding-top: 5%">性別：<?php echo $gender;?></p>
                        <p style="padding-top: 5%">身份別：<?php echo $identity;?></p>
                        <p style="padding-top: 5%">學生編號：<?php echo $number;?></p>
                        <p style="padding-top: 5%">分數：</p>
                    </div>
                </div>
                <div style="width: 100%;height: 60%;border: 0px solid #000;">
                    <div style="padding: 10px;">
                        <p style="text-align: center;">課程公告</p>
                        <p style="padding-top: 5%;text-align: left;">
                            英文不會換行
                        </p>
                    </div>
                </div>
            </div>
            <div class="rightblock2">
                <div style="width: 47.5%;height: 100%;float: left;">
                    <div style="width: 100%;height: 90%;border: 1px solid #000;">
                    <video
                            style="width: 100%; height: 96%"
                            autoplay="false"
                            id="video1"
                            controls
                        >
                            <source
                                type="video/mp4"
                                src="<?php echo $file_path1;?>"
                            />
                        </video>
                    </div>
                    <div style="width: 100%;height: 10%;">
                        <h3>使用規範</h3>
                        <div style="width: 100%;padding-top: 3%;">
                            <marquee>
                                <p>
                                    一、上傳影片前需查看您的影格率「每秒讀到的幀數fps」是否與老師相符
                                    二、必須全身入鏡、避免旋轉動作
                                    三、影片律動、節奏不可與老師相差太多
                                    四、畫面中只允許一人
                                    五、拍攝時，相機要在人的正前方
                                    六、上傳檔案須為『mp4』檔                                    
                                </p>
                            </marquee>
                        </div>
                    </div>
                </div>
                <div style="width: 47.5%;height: 100%;float: right;">
                    <div style="width: 100%;height: 90%;border: 1px solid #000;">
                        學生上傳影片
                    </div>
                    <form style="padding-top: 3%;" name="form1">
                        <input type="file"><br>
                        <input type="submit" value="上傳檔案">
                        <input type="button" value="開始比對">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!-- <?php
$fromurl="http://127.0.0.1/posenet/webpage/Page02.html"; //定義造訪網址
if( $_SERVER['HTTP_REFERER'] != $fromurl )//如果不是從此網址來
{
header("Location:".$fromurl);//執行跳轉
exit;//结束
}
?> -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style03.css" />
        <?php include("../php/information.php");?>
        
        <title>page6</title>
    </head>
    <body class="center">
        <div class="wrapper">
            <div class="content_in2" style="display: inline-block">
                <div class="Uppercolumn">
                    <div style="float: left; height: 100%">課程ABC</div>
                    <a href="../php/logout.php">登出</a>
                </div>
                <br />
                <div class="leftblock1">
                    <div
                        style="
                            width: 100%;
                            height: 40%;
                            border: 0px solid #000;
                            text-align: left;
                        "
                    >
                        <div style="padding: 10px">
                            <p style="text-align: center">基本資料</p>
                            <p style="padding-top: 5%">姓名：<?php echo $name;?></p>
                            <p style="padding-top: 5%">性別：<?php echo $gender;?></p>
                            <p style="padding-top: 5%">身份別：<?php echo $identity;?></p>
                            <p style="padding-top: 5%">職員編號：<?php echo $number;?></p>
                        </div>
                    </div>
                    <div
                        style="width: 100%; height: 60%; border: 0px solid #000"
                    >
                        <div style="padding: 10px">
                            <p style="text-align: center">課程公告</p>
                            <p style="padding-top: 5%; text-align: left">
                                首開民冷花來者不些媽子治員老才我聲著空經，軍角發層傳子酒法要？配重過制；音德色究女！法學息：成來久對富府前市認選張家阿生造走不洋。今一代要行答利務！
                                張過組流呢多生如定會工使司產中，區心燈工自講人小形找音化在現單媽，天任子者情；建法水？是來調成認團我果國用兒報。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="rightblock2">
                    <div style="width: 47.5%; height: 100%; float: left">
                        <div
                            style="
                                width: 100%;
                                height: 90%;
                                border: 1px solid #000;
                                background-color: #9fd5f5;
                            "
                        >
                        
                            <p>老師上傳影片</p>
                            <video
                            style="width: 100%; height: 96%"
                            autoplay="false"
                            id="video1"
                            controls>
                        
                                <source type="video/webm" src="" id="source1"/>
                            </video>
                        </div>
                        <div style="padding-top: 3%">
                            <form name="form1" enctype= multipart/form-data>
                                <input type="file" id="upload_file1" name="file1" accept="video/mp4"/><br />
                                <input type="button" value="上傳檔案" onclick="file_upload()"/> 
                            </form>
                            
                        </div>
                    </div>
                    <div style="width: 47.5%; height: 100%; float: right">
                        <div
                            style="
                                width: 100%;
                                height: 35%;
                                border: 1px solid #000;
                                text-align: left;
                                position: relative;
                                background-color: #9fd5f5;
                            "
                        >
                            <h3 style="text-align: center">使用規範</h3>
                            <div style="width: 100%; padding-top: 3%">
                                <p style="padding-top: 2%">
                                    一、公告您的影個率「每秒讀到的幀數fps」給學生
                                </p>
                                <p style="padding-top: 2%">
                                    二、必須全身入鏡、避免旋轉動作
                                </p>
                                <p style="padding-top: 2%">
                                    三、畫面中只允許一人
                                </p>
                                <p style="padding-top: 2%">
                                    四、拍攝時，相機要在人的正前方
                                </p>
                                <p style="padding-top: 2%">
                                    五、上傳檔案須為『mp4』檔
                                </p>
                            </div>
                        </div>
                        <div style="height: 3%"></div>
                        <div
                            style="
                                width: 100%;
                                height: 51.65%;
                                border: 1px solid #000;
                                background-color: #9fd5f5;
                            "
                        >
                            <p>學生成績</p>
                        </div>
                        <div style="float: right; margin-top: 3%">
                            <input
                                type="button"
                                value="返回課程"
                                style="width: 76.6px"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <script src="../js/teacher_upload.js"></script>
            <script src="../js/teacher_upload_preview.js"></script>
        </div>
    </body>
</html>

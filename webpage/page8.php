<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style03.css" />
        <?php include("../php/information.php");?>
        <title>page10</title>
    </head>
    <body class="center">
        <div class="wrapper">
            <div class="content_in2" style="display: inline-block">
                <div class="Uppercolumn">
                    <div style="float: left; height: 100%">課程ABC</div>
                    <a
                        href="../php/logout.php"
                        style="float: right; width: 10%; height: 100%"
                        >登出</a>
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
                            <p style="padding-top: 5%">學生編號：<?php echo $number;?></p>
                        </div>
                    </div>
                    <div
                        style="width: 100%; height: 60%; border: 0px solid #000"
                    >
                        <div style="padding: 10px">
                            <p style="text-align: center">課程公告</p>
                            <p style="padding-top: 5%; text-align: left">
                                英文不會換行
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
                            "
                        >
                            老師關節影像資訊
                        </div>
                        <div style="padding-top: 3%">
                            分數: <output>60</output>
                        </div>
                    </div>
                    <div style="width: 47.5%; height: 100%; float: right">
                        <div
                            style="
                                width: 100%;
                                height: 90%;
                                border: 1px solid #000;
                            "
                        >
                            學生關節影像資訊
                        </div>
                        <div style="padding-top: 3%">
                            <input
                                type="submit"
                                value="送出分數"
                                style="float: left"
                            />
                            <input
                                type="button"
                                value="返回課程"
                                style="float: right"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

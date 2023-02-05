<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/index.css" />
       
        <?php include("../php/score.php");?>
        <title>Page5</title>
    </head>
    <body class="center">
        <div class="wrapper">
            <div class="content_in1">
                <div style="float: left; height: 100%">
                    <div class="videoblock2">
                        <div style="width: 100%; height: 4%">
                            標準影片之關節影像
                        </div>
                        <video
                            style="width: 100%; height: 96%"
                            autoplay="false"
                            controls
                        >
                        
                            <source type="video/webm" src="<?php echo $newpath1;?>"/>
                        </video>
                    </div>
                    <div style="height: 78px">
                        <p></p>
                    </div>
                </div>
                <form style="display: inline-block">
                    <input
                        type="button"
                        value="重新開始"
                        style="
                            width: auto;
                            left: 50%;
                            top: 50%;
                            position: absolute;
                            transform: translate(-50%, -50%);
                        "
                        onclick="location.href='restart.php'"
                    /><br />
                    分數:<output type='text' name="結果" id="output"><?php echo $result;?></output>
                </form>
                <div style="float: right; height: 100%">
                    <div class="videoblock2">
                        <div style="width: 100%; height: 4%">
                            比較影片之關節影像
                        </div>
                        <video
                            style="width: 100%; height: 96%"
                            autoplay="false"
                            controls
                        >
                            <source type="video/webm" src="<?php echo $newpath2;?>"/>
                        </video>
                    </div>
                    <div style="height: 78px">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>



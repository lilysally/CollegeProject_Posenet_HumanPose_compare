//https://ithelp.ithome.com.tw/articles/10230610

function file_upload1() {
    //建立xmlHttp物件
    var xmlHttp;
    if (window.XMLHttpRequest) {
        //使用if檢測使用者使用的瀏覽器是否支援
        xmlHttp = new XMLHttpRequest(); //創建新的XMLHttpRequest
    } else {
        xmlHttp = new ActiveXObject(" Microsoft.XMLHTTP "); //舊瀏覽器
    }

    //利用FormData表單資料物件,快速收集表單資訊
    var form = document.form1; //收集name="form1"的表單資訊(普通表單域 和 上傳檔案域)
    var fd = new FormData(form); //提交資料
    xmlHttp.open("POST", "../php/upload.php", false); // true非同步、false同步
    xmlHttp.send(fd);
}

function file_upload2() {
    //建立xmlHttp物件
    var xmlHttp;
    if (window.XMLHttpRequest) {
        //使用if檢測使用者使用的瀏覽器是否支援
        xmlHttp = new XMLHttpRequest(); //創建新的XMLHttpRequest
    } else {
        xmlHttp = new ActiveXObject(" Microsoft.XMLHTTP ");
    }

    //利用FormData表單資料物件,快速收集表單資訊
    var form = document.form2; //收集name="form1"的表單資訊(普通表單域 和 上傳檔案域)
    var fd = new FormData(form); //提交資料
    xmlHttp.open("POST", "../php/upload.php", false); //true:非同步
    xmlHttp.send(fd);
}

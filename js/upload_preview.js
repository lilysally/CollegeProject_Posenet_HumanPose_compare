//顯示點擊選擇檔案button後影片的預覽
const input1 = document.getElementById("upload_file1");
const video1 = document.getElementById("video1");
const videoSource1 = document.createElement("source");
// var videoSource1 = document.getElementById("source1");
// videoSource1.src = "../example/example01.mp4";

input1.addEventListener("change", function () {
    const files = this.files || [];

    if (!files.length) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        //onload事件
        // console.log("src1");
        videoSource1.setAttribute("src", e.target.result);
        video1.appendChild(videoSource1);
        video1.load();
        video1.play();
    };

    reader.onprogress = function (e) {
        console.log("progress: ", Math.round((e.loaded * 100) / e.total));
    };

    reader.readAsDataURL(files[0]);
});

const input2 = document.getElementById("upload_file2");
const video2 = document.getElementById("video2");
const videoSource2 = document.createElement("source");

input2.addEventListener("change", function () {
    const files = this.files || [];

    if (!files.length) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        videoSource2.setAttribute("src", e.target.result);
        console.log("src2");
        video2.appendChild(videoSource2);
        video2.load();
        video2.play();
    };

    reader.onprogress = function (e) {
        console.log("progress: ", Math.round((e.loaded * 100) / e.total));
    };

    reader.readAsDataURL(files[0]);
});

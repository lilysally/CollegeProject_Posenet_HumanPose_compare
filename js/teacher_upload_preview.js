//顯示點擊選擇檔案button後影片的預覽
const input1 = document.getElementById("upload_file1");
const video1 = document.getElementById("video1");
const videoSource1 = document.createElement("source");

input1.addEventListener("change", function () {
    const files = this.files || [];

    if (!files.length) return;

    const reader = new FileReader();

    reader.onload = function (e) {
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

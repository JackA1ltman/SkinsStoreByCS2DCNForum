//显示通知窗口
function notice() {
    var notice_window = document.getElementById("notice_window");
    var notice_bg = document.getElementById("notice_bg");
    notice_window.style.display = "block";
    notice_bg.style.display = "block";
}
//关闭通知窗口
function close_notice() {
    var notice_window = document.getElementById("notice_window");
    var notice_bg = document.getElementById("notice_bg");
    notice_window.style.display = "none";
    notice_bg.style.display = "none";
}
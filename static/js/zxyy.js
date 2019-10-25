// 验证码部分开始
window.onload = function() {
        var arr = document.querySelector(".verification");
        var shu = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "g", "d", "g", "h"];
        arr.onclick = function() {
            var index = Math.floor(Math.random() * 17);
            for (i = 0; i <= shu.length; i++) {

            }
            arr.innerHTML = shu[index];
        }
    }
    // 验证码部分结束